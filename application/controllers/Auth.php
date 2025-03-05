<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->db->distinct();
        $this->db->select('operation');
        $this->db->from('employee');
        $this->db->where("operation IS NOT NULL"); // Exclude NULL values
        $this->db->where("operation != ''"); // Exclude empty values
        $this->db->group_by('operation'); // Ensure unique values
        $data['operations'] = $this->db->get()->result_array();
        $this->load->view('Auth/Login', $data);
    }

    public function getBranchesByOperation()
    {
        $operation = $this->input->post('operation'); // Get selected operation

        $this->db->distinct();
        $this->db->select('bank_branch_name');
        $this->db->from('employee');
        $this->db->where('operation', $operation);
        $this->db->where("bank_branch_name IS NOT NULL");
        $this->db->where("bank_branch_name != ''");
        $this->db->group_by('bank_branch_name');
        $query = $this->db->get();
        echo json_encode($query->result_array()); // Return data as JSON
    }

    // public function login()
    // {
    //     $postData = $this->input->post();
    //     $role = isset($postData['role']) ? $postData['role'] : null;
    //     $empid = isset($postData['empid']) ? $postData['empid'] : null;
    //     $password = isset($postData['password']) ? $postData['password'] : null;
    //     $operation = isset($postData['operation']) ? $postData['operation'] : null;
    //     $branch = isset($postData['branch']) ? $postData['branch'] : null;
    //     $supervisor_name = isset($postData['empid']) ? $postData['empid'] : null;  // 🔄 Supervisor Name in empid field
    //     $supervisor_contact = isset($postData['password']) ? $postData['password'] : null;  // 🔄 Supervisor Contact in password field
    //     $branch_manager_name = isset($postData['empid']) ? $postData['empid'] : null;  // 🔄 Supervisor Contact in password field
    //     $branch_manager_contact = isset($postData['password']) ? $postData['password'] : null;  // 🔄 Supervisor Contact in password field

    //     if (empty($role)) {
    //         echo json_encode(['status' => 'error', 'message' => 'Role is required.']);
    //         return;
    //     }

    //     $this->db->where('role', $role);

    //     // ✅ Supervisor Case: Check by supervisor_name, supervisor_contact & operation
    //     if ($role == 'supervisor') {
    //         if (empty($operation) || empty($supervisor_name) || empty($supervisor_contact)) {
    //             echo json_encode(['status' => 'error', 'message' => 'All Fields are required.']);
    //             return;
    //         }
    //         $this->db->where('operation', $operation);
    //         $this->db->where('supervisor_name', $supervisor_name);
    //         $this->db->where('supervisor_name_contact', $supervisor_contact);
    //     }
    //     // Branch Manager Case: Check by empid, operation & branch
    //     else if ($role == 'branch_manager') {
    //         if (empty($operation) || empty($branch) || empty($branch_manager_name) || empty($branch_manager_contact)) {
    //             echo json_encode(['status' => 'error', 'message' => 'All Fields are required.']);
    //             return;
    //         }
    //         $this->db->where('operation', $operation);
    //         $this->db->where('bank_branch_name', $branch);
    //         $this->db->where('branch_bm_name', $branch_manager_name);
    //         $this->db->where('bm_contact_number', $branch_manager_contact);
    //     }
    //     // ✅ Admin Case: Check by empid only
    //     else if ($role == 'admin') {
    //         if (empty($empid) || empty($password)) {
    //             echo json_encode(['status' => 'error', 'message' => 'All Fields are required']);
    //             return;
    //         }
    //         $this->db->where('empid', $empid);
    //         $this->db->where('password', $password);
    //     }

    //     $user = $this->db->get('employee')->row_array();

    //     if (!$user) {
    //         echo json_encode(['status' => 'error', 'message' => 'User not found.']);
    //         return;
    //     }

    //     $this->session->set_userdata('user', $user);
    //     $this->session->set_userdata('role', $role); 

    //     echo json_encode(['status' => 'success', 'message' => 'Login successful.', 'redirect' => base_url('Dashboard')]);
    // }

    public function login()
    {
        $postData = $this->input->post();
        $role = isset($postData['role']) ? $postData['role'] : null;
        $empid = isset($postData['empid']) ? $postData['empid'] : null;
        $password = isset($postData['password']) ? $postData['password'] : null;
        $operation = isset($postData['operation']) ? $postData['operation'] : null;
        $branch = isset($postData['branch']) ? $postData['branch'] : null;

        // Supervisor aur Branch Manager ka data empid aur password se hi lena hai
        $supervisor_name = $empid;
        $supervisor_contact = $password;
        $branch_manager_name = $empid;
        $branch_manager_contact = $password;

        if (empty($role)) {
            echo json_encode(['status' => 'error', 'message' => 'Role is required.']);
            return;
        }

        $this->db->where('role', $role);

        // ✅ Supervisor Case: Check by empid (supervisor_name), password (supervisor_contact) & operation & branch
        if ($role == 'supervisor') {
            if (empty($operation) || empty($supervisor_name) || empty($supervisor_contact)) {
                echo json_encode(['status' => 'error', 'message' => 'All Fields are required.']);
                return;
            }
            $this->db->where('operation', $operation);
            $this->db->where('supervisor_name', $supervisor_name);
            $this->db->where('supervisor_name_contact', $supervisor_contact);
        }
        // ✅ Branch Manager Case: Check by empid, operation, branch
        else if ($role == 'branch_manager') {
            if (empty($operation) || empty($branch) || empty($branch_manager_name) || empty($branch_manager_contact)) {
                echo json_encode(['status' => 'error', 'message' => 'All Fields are required.']);
                return;
            }
            $this->db->where('operation', $operation);
            $this->db->where('bank_branch_name', $branch);
            $this->db->where('branch_bm_name', $branch_manager_name);
            $this->db->where('bm_contact_number', $branch_manager_contact);
        }
        // ✅ Admin Case: Check by empid only
        else if ($role == 'admin') {
            if (empty($empid) || empty($password)) {
                echo json_encode(['status' => 'error', 'message' => 'All Fields are required.']);
                return;
            }
            $this->db->where('empid', $empid);
            $this->db->where('password', $password);
        }

        $users = $this->db->get('employee')->result_array(); // Fetch multiple users

        // Debugging: Uncomment this line to check the executed query
        // echo json_encode(['query' => $this->db->last_query()]); exit;

        if (!is_array($users) || count($users) === 0) {
            echo json_encode(['status' => 'error', 'message' => 'User not found.']);
            return;
        }

        if (count($users) > 1) {
            echo json_encode(['status' => 'error', 'message' => 'Multiple users found. Please contact admin.']);
            return;
        }

        $user = $users[0]; // Select the first user if multiple exist

        $this->session->set_userdata('user', $user);
        $this->session->set_userdata('role', $role);

        echo json_encode(['status' => 'success', 'message' => 'Login successful.', 'redirect' => base_url('Dashboard')]);
    }






    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect(base_url('Auth'));
    }

}

?>