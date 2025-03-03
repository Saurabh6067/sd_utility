<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if (!$this->session->userdata('user')) {
            redirect(base_url('Auth'));
        }

        $this->load->model('Import_model', 'import');
		$this->load->helper(array('url', 'html', 'form'));


    }
    public function index()
    {

        $this->load->view('Home/index');
    }
    public function Employeadd()
    {
        $segment = $this->uri->segment(3);
        if ($segment === 'add' && $this->input->server('REQUEST_METHOD') === 'POST') {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $password = $this->input->post('password');
            $operation = $this->input->post('circleName');
            $branch = $this->input->post('branchName');
            $role = $this->input->post('role');
            $domain = $this->input->post('domain');

            if (empty($name) || empty($email) || empty($mobile) || empty($password) || empty($operation) || empty($role)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                return;
            }

            $this->db->where('email', $email);
            $emailExists = $this->db->get('employee')->row_array();

            if ($emailExists) {
                echo json_encode(['status' => 'error', 'message' => 'Email already exists.']);
                return;
            }

            $this->db->where('mobile', $mobile);
            $mobileExist = $this->db->get('employee')->row_array();

            if ($mobileExist) {
                echo json_encode(['status' => 'error', 'message' => 'Mobile Number already exists.']);
                return;
            }

            $emp_id = "sd" . rand(10000, 99999) . substr($mobile, 6);

            $data = [
                'empid' => $emp_id,
                'name' => $name,
                'email' => $email,
                'mobile' => $mobile,
                'password' => $password,
                'operation' => $operation,
                'branch' => $branch,
                'role' => $role,
                'domain' => $domain,
                'created_at_time' => date('H:i:s'),
                'created_at_date' => date('d-m-y'),
            ];

            // Insert data into the database
            $insert = $this->db->insert('employee', $data);

            if ($insert) {
                echo json_encode(['status' => 'success', 'message' => 'Employee added successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to add employee.']);
            }
        } else {
            $this->db->select('*');
            $this->db->from('branch');
            $this->db->order_by('id', 'DESC');
            $this->db->where('status', 'true');
            $query = $this->db->get()->result_array();
            $data['branch'] = $query;

            $this->load->view('Home/emp_add');
        }
    }
    public function Operation()
    {
        $segment = $this->uri->segment(3);
        if ($segment === 'add' && $this->input->server('REQUEST_METHOD') === 'POST') {

            $circleName = $this->input->post('circleName');
            $circleAddress = $this->input->post('circleAddress');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');

            if (empty($circleName) || empty($circleAddress) || empty($latitude) || empty($longitude)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                return;
            }


            $data = [
                'operation_city' => $circleName,
                'operation_address' => $circleAddress,
                'operation_lat' => $latitude,
                'operation_lon' => $longitude,
                'created_at_time' => date('H:i:s'),
                'created_at_date' => date('Y-m-d'),
            ];

            // Insert data into the database
            $insert = $this->db->insert('operation', $data);

            if ($insert) {
                echo json_encode(['status' => 'success', 'message' => 'Circle saved successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to save circle.']);
            }
        } else {
            $this->db->select('*');
            $this->db->from('operation');
            $this->db->order_by('id', 'DESC');
            $this->db->where('status', 'true');
            $query = $this->db->get()->result_array();
            $data['operation'] = $query;

            $this->load->view('Home/opration', $data);
        }
    }
    public function Branch()
    {
        $segment = $this->uri->segment(3);

        if ($segment === 'add' && $this->input->server('REQUEST_METHOD') === 'POST') {
            if ($this->input->is_ajax_request()) {
                $circleName = $this->input->post('circleName');
                $branch = $this->input->post('branch');
                $lat = $this->input->post('lat');
                $lon = $this->input->post('lon');

                if (empty($circleName) || empty($branch) || empty($lat) || empty($lon)) {
                    echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                    return;
                }

                $data = [
                    'operation' => $circleName,
                    'branch_name' => $branch,
                    'lat' => $lat,
                    'lon' => $lon,
                    'created_at_time' => date('H:i:s'),
                    'created_at_date' => date('Y-m-d'),
                ];

                // Insert data into the database
                $insert = $this->db->insert('branch', $data);

                if ($insert) {
                    echo json_encode(['status' => 'success', 'message' => 'Branch Created successfully.']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to save Branch.']);
                }
            } else {
                // If not an AJAX request, show the regular page
                $this->load->view('Home/branch');
            }
        } else {
            // Show the list of branches or handle other request types
            $this->db->select('branch.*, operation.operation_city AS operation_city');
            $this->db->from('branch');
            $this->db->join('operation', 'operation.id = branch.operation', 'left');
            $this->db->where('branch.status', 'true');
            $this->db->order_by('branch.id', 'DESC');
            $query = $this->db->get()->result_array();

            $data['branch'] = $query;

            $this->load->view('Home/branch', $data);
        }
    }
    public function getBranchesByOperation()
    {
        $operationId = $this->input->post('operation_id');

        if (empty($operationId)) {
            echo json_encode(['status' => 'error', 'message' => 'Operation ID is required.']);
            return;
        }

        // Fetch branches based on operation ID
        $this->db->select('*');
        $this->db->from('branch');
        $this->db->where('operation', $operationId);
        $this->db->where('status', 'true');
        $query = $this->db->get()->result_array();

        if (!empty($query)) {
            echo json_encode(['status' => 'success', 'branches' => $query]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No branches found for this operation.']);
        }
    }
    public function addempmaually()
    {
        $operation['operation'] = $this->db->get('operation')->result_array();
        $this->load->view('Home/addempmaually', $operation);
    }
    public function Role()
    {
        $segment = $this->uri->segment(3);
        if ($segment === 'add' && $this->input->server('REQUEST_METHOD') === 'POST') {
            $circleName = $this->input->post('circleName');
            $branch = $this->input->post('branch');


            if (empty($circleName) || empty($branch)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                return;
            }


            $data = [
                'operation' => $circleName,
                'branch_name' => $branch,
                'created_at_time' => date('H:i:s'),
                'created_at_date' => date('d-m-y'),
            ];

            // Insert data into the database
            $insert = $this->db->insert('branch', $data);

            if ($insert) {
                echo json_encode(['status' => 'success', 'message' => 'Branch Created successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to save Branch.']);
            }
        } else {
            $this->db->select('*');
            $this->db->from('branch');
            $this->db->order_by('id', 'DESC');
            $this->db->where('status', 'true');
            $query = $this->db->get()->result_array();
            $data['branch'] = $query;

            $this->load->view('Home/branch', $data);
        }
    }
    public function Allempprofile()
    {
        $this->load->view('Home/emp_profile');
    }
    public function Attendance()
    {
        $this->load->view('Home/attendance');
    }
    public function AddLeaveType()
    {
        $segment = $this->uri->segment(3);
        if ($segment === 'add' && $this->input->server('REQUEST_METHOD') === 'POST') {

            $leavetype = $this->input->post('leavetype');
            $day = $this->input->post('day');


            if (empty($leavetype) || empty($day)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                return;
            }


            $data = [
                'leavetype' => $leavetype,
                'day' => $day,
                'created_at_time' => date('H:i:s'),
                'created_at_date' => date('Y-m-d'),
            ];

            $insert = $this->db->insert('tbl_leavetype', $data);

            if ($insert) {
                echo json_encode(['status' => 'success', 'message' => 'Leave Type save successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to save Leave Type.']);
            }
        } else {
            $data['tbl_leavetype'] = $this->db->query("Select * from `leavetype` where `status` = 'true'")->result_array();
            $this->load->view('Home/add_leavetype', $data);
        }


    }
    public function Leave()
    {
        $this->load->view('Home/admin_leave');
    }
    public function Addwarning()
    {
        $this->load->view('Home/warning');
    }
    public function EmpDashbaord()
    {
        $currentbrach = $this->session->userdata('user');
        $this->db->select('*');
        $this->db->from('branch');
        $this->db->where('id', $currentbrach['branch']);
        $query = $this->db->get()->row_array();
        $data['branch'] = $query;
        $this->load->view('Home/employee-dashboard', $data);
    }
    public function EmpAttendance()
    {
        $currentbrach = $this->session->userdata('user');
        $userId = $currentbrach['id'];

        // Query to fetch the latest record for each date
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->where('user_id', $userId);
        $this->db->order_by('created_at_date', 'ASC');
        $this->db->order_by('created_at_time', 'DESC');
        $this->db->group_by('created_at_date');

        $query = $this->db->get()->result_array();

        $attendance = $query;
        $totalPresent = 0;
        $totalHalfDays = 0;

        $currentMonth = date('m');
        $currentYear = date('Y');

        foreach ($attendance as $record) {
            $recordDate = DateTime::createFromFormat('d-m-y', $record['created_at_date']);
            if (
                $recordDate->format('m') == $currentMonth &&
                $recordDate->format('Y') == $currentYear
            ) {
                if ($record['remark'] === 'present') {
                    if (
                        empty($record['punch_in']) ||
                        empty($record['punch_out']) ||
                        strtotime($record['punch_in']) > strtotime('10:00:00')
                    ) {
                        $totalHalfDays += 1;
                    } else {
                        $totalPresent++;
                    }
                }
            }
        }

        $data['attendance'] = $attendance;
        $data['user_name'] = $currentbrach['name'];
        $data['total_present'] = $totalPresent;
        $data['total_half_days'] = $totalHalfDays;

        $this->load->view('Home/emp_attendance', $data);
    }
    public function EmpLeave()
    {

        $segment = $this->uri->segment(3);
        if ($segment === 'add' && $this->input->server('REQUEST_METHOD') === 'POST') {

            $leavetype = $this->input->post('leavetype');
            $numberDays = $this->input->post('numberDays');
            $from = $this->input->post('from');
            $to = $this->input->post('to');
            $reason = $this->input->post('reason');


            if (empty($leavetype) || empty($numberDays) || empty($from) || empty($to) || empty($reason)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                return;
            }


            $data = [
                'leavetype_id' => $leavetype,
                'day' => $numberDays,
                'from_date' => $from,
                'to_date' => $to,
                'reason' => $reason,
                'created_at_time' => date('H:i:s'),
                'created_at_date' => date('Y-m-d'),
            ];

            $insert = $this->db->insert('emp_leave_request', $data);
            if ($insert) {
                echo json_encode(['status' => 'success', 'message' => 'Leave Request Added successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to save Leave Request.']);
            }
        } else {
            $data['leavetype'] = $this->db->query("Select * from `tbl_leavetype` where `status` = 'true'")->result_array();

            $this->db->select('emp_leave_request.*, tbl_leavetype.leavetype');
            $this->db->from('emp_leave_request');
            $this->db->join('tbl_leavetype', 'emp_leave_request.leavetype_id = tbl_leavetype.id', 'left');
            $this->db->where('emp_leave_request.status', 'true');
            $data['requests'] = $this->db->get()->result_array();

            $this->load->view('Home/emp_leave', $data);
        }
    }
    public function createBranch()
    {
        $operation['operation'] = $this->db->get('operation')->result_array();
        $this->load->view('Home/createbranch', $operation);
    }
    public function geoloaction()
    {
        $this->load->view('Home/geolocation');
    }
    public function attendanceMark()
    {
        $segment = $this->uri->segment(3);
        if ($segment === 'add' && $this->input->server('REQUEST_METHOD') === 'POST') {
            $remake = $this->input->post('remark');
            $user_id = $this->input->post('user_id');
            $operation_id = $this->input->post('operation_id');
            $branch_id = $this->input->post('branch_id');
            $punch_in = $this->input->post('punch_in');
            $punch_out = $this->input->post('punch_out');

            if (empty($remake) || empty($user_id) || empty($operation_id) || empty($branch_id)) {
                echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
                return;
            }

            $data = [
                'remark' => $remake,
                'user_id' => $user_id,
                'operation_id' => $operation_id,
                'branch_id' => $branch_id,
                'punch_in' => $punch_in,
                'punch_out' => $punch_out,
                'created_at_time' => date('H:i:s'),
                'created_at_date' => date('Y-m-d'),
            ];

            $insert = $this->db->insert('attendance', $data);

            if ($insert) {
                echo json_encode(['status' => 'success', 'message' => 'Attendance Mark successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to Attendance Mark.']);
            }
        } else {

        }
    }
    public function branchAttendance()
    {
        $sessiondata = $this->session->userdata('user');
        $branch_id = $sessiondata['branch'];
    
        $today_date = date('Y-m-d');
        $current_month = date('m');
        $current_year = date('Y');
        $month_name = date('F'); // Get full month name (e.g., "February")
    
        // ✅ Get total days in the current month
        $total_days = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);
    
        // ✅ Get total employees in the branch
        $this->db->where('branch', $branch_id);
        $totalbranch_emp = $this->db->count_all_results('employee');
    
        // ✅ Get employees who have attendance for today
        $this->db->distinct();
        $this->db->select('user_id');
        $this->db->from('attendance');
        $this->db->where('branch_id', $branch_id);
        $this->db->where('today_date', $today_date);
        $employees = $this->db->get()->result_array();
    
        // ✅ Extract user IDs from attendance records
        $employee_ids = array_column($employees, 'user_id');
    
        // ✅ Fetch details of all employees in the branch
        $this->db->select('id, name');
        $this->db->from('employee');
        $this->db->where('branch', $branch_id);
        $all_employees = $this->db->get()->result_array();
    
        // ✅ Classify employees based on attendance
        $present_emp_ids = $employee_ids;  // Employees who have marked attendance
        $absent_emp_list = [];
    
        foreach ($all_employees as $emp) {
            if (!in_array($emp['id'], $present_emp_ids)) {
                $absent_emp_list[] = [
                    'id' => $emp['id'],
                    'name' => $emp['name'],
                    'status' => 'Absent'
                ];
            }
        }
    
        // ✅ Get present employees (Full Day)
        $this->db->select('COUNT(DISTINCT user_id) as totalbranch_present');
        $this->db->from('attendance');
        $this->db->where('branch_id', $branch_id);
        $this->db->where('remark', 'Full Day');
        $this->db->where('today_date', $today_date);
        $totalbranch_present = $this->db->get()->row()->totalbranch_present;
    
        // ✅ Get half-day employees
        $this->db->select('COUNT(DISTINCT user_id) as totalbranch_halfday');
        $this->db->from('attendance');
        $this->db->where('branch_id', $branch_id);
        $this->db->where('remark', 'Half Day');
        $this->db->where('today_date', $today_date);
        $totalbranch_halfday = $this->db->get()->row()->totalbranch_halfday;
    
        // ✅ Calculate total absent employees
        $totalbranch_absent = $totalbranch_emp - ($totalbranch_present + $totalbranch_halfday);
    
        // ✅ Prepare response data
        $data = [
            'totalbranch_emp' => $totalbranch_emp, // Total employees
            'totalbranch_present' => $totalbranch_present, // Present
            'totalbranch_halfday' => $totalbranch_halfday, // Half Day
            'totalbranch_absent' => $totalbranch_absent, // Absent count
            'total_days' => $total_days, // ✅ Total days in the current month
            'branch_id' => $branch_id,
            'month_name' => $month_name,
            'current_year' => $current_year,
            'employee_list' => $all_employees, 
            'absent_emp_list' => $absent_emp_list,
            'today_date' => $today_date
        ];
    
        // ✅ Load view with attendance data
        $this->load->view('Home/branchAttendance', $data);
    }
    

    // excel Upload 
    public function addEmpExcel()
	{
		if ($this->input->post('submit')) {

			$path = 'uploads/';
			require_once APPPATH . "/third_party/PHPExcel.php";
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'xlsx|xls|csv';
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('uploadFile')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}
			if (empty($error)) {
				if (!empty($data['upload_data']['file_name'])) {
					$import_xls_file = $data['upload_data']['file_name'];
				} else {
					$import_xls_file = 0;
				}
				$inputFileName = $path . $import_xls_file;

				try {
					$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
					$objReader = PHPExcel_IOFactory::createReader($inputFileType);
					$objPHPExcel = $objReader->load($inputFileName);
					$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
					$flag = true;
					$i = 0;
					foreach ($allDataInSheet as $value) {
						if ($flag) {
							$flag = false;
							continue;
						}
						$inserdata[$i]['sol_id'] = $value['F'];
						$inserdata[$i]['name'] = $value['K'];
						$inserdata[$i]['empid'] = $value['L'];
						$inserdata[$i]['mobile'] = $value['M'];
                        $inserdata[$i]['esi_number'] = $value['N'];

                        $inserdata[$i]['pf_number'] = $value['O'];
                        $inserdata[$i]['pf_uan'] = $value['P'];
                        $inserdata[$i]['aadhar_number'] = $value['Q'];
                        $inserdata[$i]['medi_claim_number'] = $value['R'];
                        $inserdata[$i]['emp_group_name'] = $value['S'];
                        $inserdata[$i]['date_of_joining'] = $value['T'];
                        $inserdata[$i]['dob'] = $value['U'];
                        $inserdata[$i]['guardian_name'] = $value['V'];
                        $inserdata[$i]['realation_ship_name'] = $value['W'];
                        $inserdata[$i]['gender'] = $value['X'];
                        $inserdata[$i]['marital_status'] = $value['Y'];
                        $inserdata[$i]['emp_qualification'] = $value['Z'];
                        $inserdata[$i]['role'] = $value['AA'];
                        $inserdata[$i]['leave_balance'] = $value['AB'];
                        $inserdata[$i]['total_days'] = $value['AC'];
                        $inserdata[$i]['working_days'] = $value['AD'];
                        $inserdata[$i]['salary_duduct_days'] = $value['AE'];
                        $inserdata[$i]['basic'] = $value['AF'];
                        $inserdata[$i]['hra'] = $value['AG'];
                        $inserdata[$i]['convince'] = $value['AH'];
                        $inserdata[$i]['city_all_new'] = $value['AI'];
                        $inserdata[$i]['special_allowance'] = $value['AJ'];
                        $inserdata[$i]['other_allowance'] = $value['AK'];
                        $inserdata[$i]['bonus'] = $value['AL'];
                        $inserdata[$i]['washing'] = $value['AM'];
                        $inserdata[$i]['leave_allow'] = $value['AN'];
                        $inserdata[$i]['uniform_allowance'] = $value['AO'];
                        $inserdata[$i]['night_allowances'] = $value['AP'];
                        $inserdata[$i]['pd_all_allowance'] = $value['AQ'];
                        $inserdata[$i]['uniform_washing_allowance'] = $value['AR'];
                        $inserdata[$i]['arear_salary'] = $value['AS'];
                        $inserdata[$i]['total_salary'] = $value['AT'];
                        $inserdata[$i]['esi_on'] = $value['AU'];
                        $inserdata[$i]['pf_on'] = $value['AV'];
                        $inserdata[$i]['pf_com_on'] = $value['AW'];
                        $inserdata[$i]['pt_on'] = $value['AX'];
                        $inserdata[$i]['em_esi'] = $value['AY'];
                        $inserdata[$i]['em_pf'] = $value['AZ'];
                        $inserdata[$i]['em_pt'] = $value['BA'];
                        $inserdata[$i]['co_esi'] = $value['BB'];
                        $inserdata[$i]['co_pf'] = $value['BC'];
                        $inserdata[$i]['tds'] = $value['BD'];
                        $inserdata[$i]['advance'] = $value['BE'];
                        $inserdata[$i]['advance_balance'] = $value['BF'];
                        $inserdata[$i]['deduction'] = $value['BG'];
                        $inserdata[$i]['net_salary'] = $value['BH'];
                        $inserdata[$i]['emp_name_in_bank'] = $value['BI'];
                        $inserdata[$i]['account_number'] = $value['BJ'];
                        $inserdata[$i]['bank_name'] = $value['BK'];
                        $inserdata[$i]['branch_name'] = $value['BL'];
                        $inserdata[$i]['ifsc_code'] = $value['BM'];
						$i++;
					}
					$result = $this->import->importData($inserdata);
					if ($result) {
						redirect('Admin/addEmpExcel');
					} else {
						echo "ERROR !";
					}

				} catch (Exception $e) {
					die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
						. '": ' . $e->getMessage());
				}
			} else {
				echo $error['error'];
			}


		}
		$this->load->view('import');
	}
    
    
    
    




}

?>