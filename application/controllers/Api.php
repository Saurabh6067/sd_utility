<?php
class Api extends CI_Controller
{
    private $response;

    public function __construct()
    {
        parent::__construct();
        $this->response = [
            'res' => 'error',
            'msg' => 'An error occurred',
            'data' => []
        ];
        header('Content-Type: application/json');
        date_default_timezone_set("Asia/Kolkata");
    }

    private function getJsonInput()
    {
        $input = json_decode(file_get_contents('php://input'), true);
        return $input ? $input : $this->input->post();
    }

    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371;

        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);

        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        $a = sin($dlat / 2) * sin($dlat / 2) +
            cos($lat1) * cos($lat2) *
            sin($dlon / 2) * sin($dlon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c;
    }


    public function Test()
    {

        $res = $this->db->query('SELECT * FROM `employee`')->result();
        print_r($res);
        die();
    }
    public function Login()
    {
        $input = $this->getJsonInput();
        $empid = $input['empid'] ?? null;

        if (empty($empid)) {
            echo json_encode(['res' => 'error', 'msg' => 'Employee Id  is required.']);
            return;
        }

        $usercheck = $this->db->query(
            "SELECT * FROM `employee` WHERE empid = ? ",
            [$empid]
        )->row();

        $operationId = $usercheck->operation ?? null;
        $operation = $this->db->query("SELECT operation_city FROM `operation` WHERE id = ?", [$operationId])->row();

        if ($operation) {
            $usercheck->operation = $operation->operation_city;
        }

        if ($usercheck) {
            $this->response['res'] = 'success';
            $this->response['msg'] = 'Login successful.';
            $this->response['data'] = $usercheck;
        } else {
            $this->response['msg'] = 'Invalid Employee Id.';
        }

        echo json_encode($this->response);
    }

    public function Markattendance()
    {
        $input = $this->getJsonInput();
        
        // Required fields
        $required_fields = [
            'branch_id', 'attandance_type', 'operation', 'branch_lat', 'branch_lon', 
            'user_id', 'emp_id', 'user_lat', 'user_lon', 'current_date', 'current_time'
        ];
        
        // Validate all required fields in one go
        foreach ($required_fields as $field) {
            if (empty($input[$field])) {
                echo json_encode(['res' => 'error', 'msg' => ucfirst(str_replace('_', ' ', $field)) . ' is required.']);
                return;
            }
        }
    
        // Extract variables after validation
        $branch_id = $input['branch_id'];
        $attandance_type = $input['attandance_type'];
        $operation = $input['operation'];
        $branch_lat = $input['branch_lat'];
        $branch_lon = $input['branch_lon'];
        $user_id = $input['user_id'];
        $emp_id = $input['emp_id'];
        $user_lat = $input['user_lat'];
        $user_lon = $input['user_lon'];
        $current_date = $input['current_date'];
        $current_time = $input['current_time'];
    
        // Check if branch exists
        $checkbranckexist = $this->db->get_where('branch', ['id' => $branch_id, 'status' => 'true'])->row();
        if (empty($checkbranckexist)) {
            echo json_encode(['res' => 'error', 'msg' => 'Branch does not exist.']);
            return;
        }
    
        // Calculate distance
        $distance = $this->calculateDistance($branch_lat, $branch_lon, $user_lat, $user_lon);
        $distance_in_meter = round($distance * 1000) . " meter";
        $check_distance = round($distance * 1000);
    
        if ($check_distance >= 100) {
            echo json_encode(['res' => 'error', 'data' => $distance_in_meter, 'msg' => 'You are not in branch location.']);
            return;
        }
    
        if ($attandance_type == 'punchIn') {
            $remark = '';
            $punch_in_time = strtotime($current_time);
            $ten_am = strtotime("10:00:00");
    
            if ($punch_in_time > $ten_am) {
                $remark = 'Half Day';
            }
    
            $data = [
                'emp_id' => $emp_id,
                'user_id' => $user_id,
                'user_lat' => $user_lat,
                'user_log' => $user_lon,
                'punch_in_date' => $current_date,
                'punch_in_time' => $current_time,
                'punch_out_date' => null,
                'punch_out_time' => null,
                'today_date' => $current_date,
                'operation_id' => $operation,
                'branch_id' => $branch_id,
                'remark' => $remark,
                'status' => 'true',
            ];
    
            $this->db->insert('attendance', $data);
            echo json_encode(['res' => 'success', 'data' => $distance_in_meter, 'msg' => 'Punch In Recorded Successfully.']);
            return;
        }
    
        if ($attandance_type == 'punchOut') {
            $this->db->where('emp_id', $emp_id)
                     ->where('user_id', $user_id)
                     ->where('branch_id', $branch_id)
                     ->where('today_date', $current_date)
                     ->update('attendance', [
                         'punch_out_date' => $current_date,
                         'punch_out_time' => $current_time
                     ]);
    
            echo json_encode(['res' => 'success', 'data' => $distance_in_meter, 'msg' => 'Punch Out Recorded Successfully.']);
            return;
        }
    
        echo json_encode(['res' => 'error', 'msg' => 'Invalid attendance type.']);
    }
    
    






}
?>