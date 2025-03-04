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
        $email = isset($postData['email']) ? $postData['email'] : null;
        $password = isset($postData['password']) ? $postData['password'] : null;

        if (empty($email) || empty($password)) {
            echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
            return;
        }







        $this->db->where('email', $email);
        $user = $this->db->get('employee')->row_array();


        if (!$user) {
            echo json_encode(['status' => 'error', 'message' => 'User not found.']);
            return;
        }

        if ($user['password'] !== $password) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid password.']);
            return;
        }

        $this->session->set_userdata('user', $user);
        echo json_encode(['status' => 'success', 'message' => 'Login successful.']);
    }


    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect(base_url('Auth'));
    }

}

?>