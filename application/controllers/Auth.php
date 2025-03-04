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
    public function login()
    {
        $postData = $this->input->post();
        $role = isset($postData['role']) ? $postData['role'] : null;
        $empid = isset($postData['empid']) ? $postData['empid'] : null;
        $password = isset($postData['password']) ? $postData['password'] : null;
        $operation = isset($postData['operation']) ? $postData['operation'] : null;
        $branch = isset($postData['branch']) ? $postData['branch'] : null;
        $supervisor_name = isset($postData['empid']) ? $postData['empid'] : null;  // 🔄 Supervisor Name in empid field
        $supervisor_contact = isset($postData['password']) ? $postData['password'] : null;  // 🔄 Supervisor Contact in password field
    
        if (empty($role)) {
            echo json_encode(['status' => 'error', 'message' => 'Role is required.']);
            return;
        }
    
        $this->db->where('role', $role);
    
        // ✅ Supervisor Case: Check by supervisor_name, supervisor_contact & operation
        if ($role == 'supervisor') {
            if (empty($supervisor_name) || empty($supervisor_contact) || empty($operation)) {
                echo json_encode(['status' => 'error', 'message' => 'Supervisor Name, Contact, and Operation are required.']);
                return;
            }
            $this->db->where('supervisor_name', $supervisor_name);
            $this->db->where('supervisor_name_contact', $supervisor_contact);
            $this->db->where('operation', $operation);
        }
        // ✅ Branch Manager Case: Check by empid, operation & branch
        else if ($role == 'branch_manager') {
            if (empty($empid) || empty($operation) || empty($branch)) {
                echo json_encode(['status' => 'error', 'message' => 'Employee ID, Operation, and Branch are required.']);
                return;
            }
            $this->db->where('empid', $empid);
            $this->db->where('operation', $operation);
            $this->db->where('branch', $branch);
        }
        // ✅ Admin Case: Check by empid only
        else if ($role == 'admin') {
            if (empty($empid)) {
                echo json_encode(['status' => 'error', 'message' => 'Employee ID is required for Admin.']);
                return;
            }
            $this->db->where('empid', $empid);
        }
    
        $user = $this->db->get('employee')->row_array();
    
        if (!$user) {
            echo json_encode(['status' => 'error', 'message' => 'User not found.']);
            return;
        }
    
        if ($role == 'supervisor') {
            // ✅ No need to check password for supervisor, as it's using contact info
            if ($user['supervisor_name_contact'] !== $supervisor_contact) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid Supervisor Contact.']);
                return;
            }
        } else {
            // ✅ Regular password check for other roles
            if ($user['password'] !== $password) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid password.']);
                return;
            }
        }
    
        // ✅ Store user data & role in session
        $this->session->set_userdata('user', $user);
        $this->session->set_userdata('role', $role);  // 🎯 Store role separately
    
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