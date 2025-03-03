<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Import_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function importData($data)
    {

        $res = $this->db->insert_batch('employee', $data);
        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

}
?>