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
        $branch_id = $input['branch_id'] ?? null;
        $operation = $input['operation'] ?? null;
        $branch_lat = $input['branch_lat'] ?? null;
        $branch_lon = $input['branch_lon'] ?? null;
        $user_id = $input['user_id'] ?? null;
        $emp_id = $input['emp_id'] ?? null;
        $user_lat = $input['user_lat'] ?? null;
        $user_lon = $input['user_lon'] ?? null;
        $current_date = $input['current_date'] ?? null;
        $current_time = $input['current_time'] ?? null;

        if (empty($branch_id)) {
            echo json_encode(['res' => 'error', 'msg' => 'Branch Id is required.']);
            return;
        }
        if (empty($operation)) {
            echo json_encode(['res' => 'error', 'msg' => 'Operation is required.']);
            return;
        }
        if (empty($branch_lat)) {
            echo json_encode(['res' => 'error', 'msg' => 'Branch Latitude is required.']);
            return;
        }
        if (empty($branch_lon)) {
            echo json_encode(['res' => 'error', 'msg' => 'Branch Longitude is required.']);
            return;
        }
        if (empty($user_id)) {
            echo json_encode(['res' => 'error', 'msg' => 'User Id is required.']);
            return;
        }
        if (empty($emp_id)) {
            echo json_encode(['res' => 'error', 'msg' => 'Employee Id is required.']);
            return;
        }
        if (empty($user_lat)) {
            echo json_encode(['res' => 'error', 'msg' => 'User Latitude is required.']);
            return;
        }
        if (empty($user_lon)) {
            echo json_encode(['res' => 'error', 'msg' => 'User Longitude is required.']);
            return;
        }
        if (empty($current_date)) {
            echo json_encode(['res' => 'error', 'msg' => 'Current Date is required.']);
            return;
        }
        if (empty($current_time)) {
            echo json_encode(['res' => 'error', 'msg' => 'Current Time is required.']);
            return;
        }
        $checkbranckexist = $this->db->get_where('branch', ['id' => $branch_id, 'status' => 'true'])->row();

        if (empty($checkbranckexist)) {
            echo json_encode(['res' => 'error', 'msg' => 'Branch not exist.']);
            return;
        }

        $distance = $this->calculateDistance($branch_lat, $branch_lon, $user_lat, $user_lon);

        $distance_in_meter = $distance * 1000 . "meter";
        
        if($distance_in_meter > 100){
            echo json_encode(['res' => 'error', 'data'=>$distance_in_meter, 'msg' => 'You are not in branch location.']);
            return;
        }else{

        }




    }






}
?>