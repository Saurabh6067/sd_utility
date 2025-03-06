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

    public function markAbsent()
    {
        $current_date = date('Y-m-d');
        $day_of_week = date('w', strtotime($current_date)); // Get numeric day (0 = Sunday, 6 = Saturday)

        // Determine the remark based on the day
        $remark = ($day_of_week == 0) ? 'Full Day' : 'Absent'; // If Sunday, mark Present; otherwise, Absent

        // Fetch all employees who have no attendance record for today
        $this->db->select('id, empid, branch, operation');
        $this->db->from('employee');
        $this->db->where("id NOT IN (SELECT user_id FROM attendance WHERE today_date = '$current_date')", null, false);
        $employees = $this->db->get()->result_array();

        if (empty($employees)) {
            echo "No new absentees to mark.";
            return;
        }

        foreach ($employees as $emp) {
            $user_id = $emp['id'];
            $emp_id = $emp['empid'];
            $emp_branch = $emp['branch'];
            $emp_operation = $emp['operation'];

            // Insert attendance record
            $data = [
                'emp_id' => $emp_id,
                'user_id' => $user_id,
                'punch_in_date' => null,
                'punch_out_date' => null,
                'remark' => $remark, // Dynamically set remark
                'status' => 'true',
                'today_date' => $current_date,
                'branch_id' => $emp_branch,
                'operation_id' => $emp_operation,
            ];
            $this->db->insert('attendance', $data);
        }

        echo "Attendance records updated successfully!";
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
        $attandance_type = $input['attandance_type'] ?? null;
        $operation = $input['operation'] ?? null;
        $branch_lat = $input['branch_lat'] ?? null;
        $branch_lon = $input['branch_lon'] ?? null;
        $user_id = $input['user_id'] ?? null;
        $emp_id = $input['emp_id'] ?? null;
        $user_lat = $input['user_lat'] ?? null;
        $user_lon = $input['user_lon'] ?? null;
        $current_date = date('Y-m-d'); // Fix date format
        $current_time = $input['current_time'] ?? null;

        if (!$branch_id || !$attandance_type || !$operation || !$branch_lat || !$branch_lon || !$user_id || !$emp_id || !$user_lat || !$user_lon || !$current_time) {
            echo json_encode(['res' => 'error', 'msg' => 'All fields are required.']);
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

        // Check if attendance record already exists for today
        $this->db->where('emp_id', $emp_id);
        $this->db->where('today_date', $current_date);
        $attendance = $this->db->get('attendance')->row_array();

        if ($attandance_type == 'punchIn') {
            if ($attendance) {
                echo json_encode(['res' => 'error', 'msg' => 'Attendance already marked for today.']);
                return;
            }

            $punch_in_time = strtotime($current_time);
            $ten_am = strtotime("10:00:00");

            $remark = ($punch_in_time > $ten_am) ? 'Half Day' : 'Full Day';

            $data = [
                'emp_id' => $emp_id,
                'user_id' => $user_id,
                'user_lat' => $user_lat,
                'user_lon' => $user_lon,
                'punch_in_date' => $current_date,
                'punch_in_time' => $current_time,
                'today_date' => $current_date,
                'operation_id' => $operation,
                'branch_id' => $branch_id,
                'remark' => $remark,
                'status' => 'true'
            ];

            $this->db->insert('attendance', $data);
            echo json_encode(['res' => 'success', 'data' => $distance_in_meter, 'msg' => 'Punch In Recorded Successfully.']);

        } elseif ($attandance_type == 'punchOut') {
            if (!$attendance) {
                echo json_encode(['res' => 'error', 'msg' => 'Punch In is required before Punch Out.']);
                return;
            }

            if (!empty($attendance['punch_out_time'])) {
                echo json_encode(['res' => 'error', 'msg' => 'Punch Out already recorded for today.']);
                return;
            }

            // Update existing record
            $updateData = [
                'punch_out_date' => $current_date,
                'punch_out_time' => $current_time,
            ];

            $this->db->where('emp_id', $emp_id);
            $this->db->where('today_date', $current_date);
            $this->db->update('attendance', $updateData);

            if ($this->db->affected_rows() > 0) {
                echo json_encode(['res' => 'success', 'data' => $distance_in_meter, 'msg' => 'Punch Out Recorded Successfully.']);
            } else {
                echo json_encode(['res' => 'error', 'msg' => 'Failed to update Punch Out.']);
            }
        } else {
            echo json_encode(['res' => 'error', 'msg' => 'Invalid Attendance Type.']);
        }
    }
    public function checkPunchInPunchOut()
    {
        $input = $this->getJsonInput();
        $user_id = $input['user_id'] ?? null;
        $current_date = date('Y-m-d');

        if (!$user_id) {
            echo json_encode(['res' => 'error', 'msg' => 'User ID is required.']);
            return;
        }

        $this->db->where('user_id', $user_id);
        $this->db->where('today_date', $current_date);
        $attendance = $this->db->get('attendance')->row_array();

        if ($attendance) {
            if (empty($attendance['punch_in_date']) || empty($attendance['punch_in_time'])) {
                echo json_encode(['res' => 'error', 'msg' => 'User has not punched in today.']);
            } elseif (empty($attendance['punch_out_date']) || empty($attendance['punch_out_time'])) {
                echo json_encode(['res' => 'error', 'msg' => 'User has not punched out today.']);
            } else {
                echo json_encode(['res' => 'success', 'msg' => 'User has completed both Punch In and Punch Out.']);
            }
        } else {
            echo json_encode(['res' => 'error', 'msg' => 'No attendance record found for today.']);
        }
    }
    public function getTodayAttendance()
    {
        $input = $this->getJsonInput();
        $user_id = $input['user_id'] ?? null;
        $current_date = date('Y-m-d');

        if (!$user_id) {
            echo json_encode(['res' => 'error', 'msg' => 'Employee ID is required.']);
            return;
        }

        $this->db->where('user_id', $user_id);
        $this->db->where('today_date', $current_date);
        $attendance = $this->db->get('attendance')->row_array();

        if ($attendance) {
            echo json_encode(['res' => 'success', 'data' => $attendance, 'msg' => 'Attendance details retrieved successfully.']);
        } else {
            echo json_encode(['res' => 'error', 'msg' => 'No attendance record found for today.']);
        }
    }
    public function getUserMonthlyAttendance()
    {
        $input = $this->getJsonInput();
        $user_id = $input['user_id'] ?? null;

        if (!$user_id) {
            echo json_encode(['res' => 'error', 'msg' => 'Employee ID is required.']);
            return;
        }

        // Get current month & year
        $current_month = date('m');
        $current_year = date('Y');
        $total_days = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);

        // Fetch total present days
        $this->db->where('user_id', $user_id);
        $this->db->where('MONTH(today_date)', $current_month);
        $this->db->where('YEAR(today_date)', $current_year);
        $this->db->where('remark', 'Full Day');
        $total_present = $this->db->count_all_results('attendance');

        // Fetch total half-day entries
        $this->db->where('user_id', $user_id);
        $this->db->where('MONTH(today_date)', $current_month);
        $this->db->where('YEAR(today_date)', $current_year);
        $this->db->where('remark', 'Half Day');
        $total_halfday = $this->db->count_all_results('attendance');

        // Calculate total absent days
        $total_attendance_days = $total_present + $total_halfday;
        $total_absent = $total_days - $total_attendance_days;

        // Calculate percentages
        $present_percentage = ($total_present / $total_days) * 100;
        $halfday_percentage = ($total_halfday / $total_days) * 100;
        $absent_percentage = ($total_absent / $total_days) * 100;

        // Prepare response
        $response = [
            'user_id' => $user_id,
            'total_days_in_month' => $total_days,
            'total_present' => $total_present,
            'total_present_percentage' => round($present_percentage, 2) . '%',
            'total_halfday' => $total_halfday,
            'total_halfday_percentage' => round($halfday_percentage, 2) . '%',
            'total_absent' => $total_absent,
            'total_absent_percentage' => round($absent_percentage, 2) . '%'
        ];

        echo json_encode(['res' => 'success', 'data' => $response, 'msg' => 'Attendance details retrieved successfully.']);
    }

    public function getLeavetype()
    {
        $leavetype = $this->db->query('SELECT id , leavetype FROM `tbl_leavetype`')->result();
        echo json_encode(['res' => 'success', 'data' => $leavetype, 'msg' => 'Leave type retrieved successfully.']);
    }

    public function requestLeave()
    {
        $input = $this->getJsonInput();
        $empid = $input['empid'] ?? null;
        $leave_type = $input['leave_type'] ?? null;
        $from_date = $input['from_date'] ?? null;
        $to_date = $input['to_date'] ?? null;
        $reason = $input['reason'] ?? null;
        $created_at_time = date('h:i A');
        $created_at_date = date('Y-m-d');

        if (!$empid || !$from_date || !$to_date || !$reason || !$leave_type) {
            echo json_encode(['res' => 'error', 'msg' => 'All fields are required.']);
            return;
        }

        $data = [
            'employee_id' => $empid,
            'leavetype_id' => $leave_type,
            'from_date' => $from_date,
            'to_date' => $to_date,
            'reason' => $reason,
            'created_at_time' => $created_at_time,
            'created_at_date' => $created_at_date
        ];


        $this->db->insert('emp_leave_request', $data);
        echo json_encode(['res' => 'success', 'msg' => 'Leave request submitted successfully.']);

    }

    public function getleavebyempid()
    {
        $input = $this->getJsonInput();
        $empid = $input['empid'] ?? null;

        if (!$empid) {
            echo json_encode(['res' => 'error', 'msg' => 'Employee ID is required.']);
            return;
        }

        // Use query binding to prevent SQL injection
        $leavetype = $this->db->query("SELECT * FROM `emp_leave_request` WHERE `employee_id` = ?", [$empid])->result();

        echo json_encode(['res' => 'success', 'data' => $leavetype, 'msg' => 'Leave retrieved successfully.']);
    }



}
?>