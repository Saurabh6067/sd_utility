<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'third_party/PhpSpreadsheet/IOFactory.php';

class ExcelController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ExcelModel');
        $this->load->library('session');
    }

    public function index()
    {
        $data['records'] = $this->ExcelModel->getAll();
        $this->load->view('excel_view', $data);
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('excel_file')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('ExcelController');
        } else {
            $fileData = $this->upload->data();
            $filePath = $fileData['full_path'];

            // Load PhpSpreadsheet manually
            require_once APPPATH . 'third_party/PhpSpreadsheet/IOFactory.php';
            $spreadsheet = PhpSpreadsheet_IOFactory::load($filePath); // Use correct class name
            $sheet = $spreadsheet->getActiveSheet();
            $data = [];

            foreach ($sheet->getRowIterator(2) as $row) { // Skip first row (headers)
                $cells = [];
                foreach ($row->getCellIterator() as $cell) {
                    $cells[] = $cell->getValue();
                }

                $data[] = [
                    'name' => $cells[0],
                    'email' => $cells[1],
                    'phone' => $cells[2]
                ];
            }

            if (!empty($data)) {
                $this->ExcelModel->insertBatch($data);
                $this->session->set_flashdata('success', 'Excel file uploaded and data saved successfully!');
            } else {
                $this->session->set_flashdata('error', 'No data found in the file.');
            }

            redirect('ExcelController');
        }
    }
}
?>
