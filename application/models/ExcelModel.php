<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcelModel extends CI_Model
{
    private $table = 'users';

    public function getAll()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function insertBatch($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }
}
