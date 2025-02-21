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

    public function Test()
    {

        $res = $this->db->query('ALTER TABLE `tbl_payment_history` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`)');
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


}
?>