<?php
 
class Csv extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('csv_model');
        $this->load->library('csvimport');
    }
 
    function index() {
        $data['addressbook'] = $this->csv_model->get_addressbook();
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/csvindex', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }
 
    function importcsv() {
        $data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './docs/file/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';
 
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('templat/header');
            $this->load->view('asset/css');
            $this->load->view('templat/navbar_system_admin');
            $this->load->view('system_admin/csvindex', $data);
            $this->load->view('asset/js');
            $this->load->view('templat/footer');
        } else {
            $file_data = $this->upload->data();
            $file_path =  './docs/file/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'firstname'=>$row['firstname'],
                        'lastname'=>$row['lastname'],
                        'phone'=>$row['phone'],
                        'email'=>$row['email'],
                    );
                    $this->csv_model->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csv');
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('templat/header');
                $this->load->view('asset/css');
                $this->load->view('templat/navbar_system_admin');
                $this->load->view('system_admin/csvindex', $data);
                $this->load->view('asset/js');
                $this->load->view('templat/footer');
            }
 
        } 
 
}
/*END OF FILE*/

'id_num_eligible'=>$row['elderly_aw_id_num_eligible'],
'elderly_aw_name_eligible'=>$row['elderly_aw_name_eligible'],
'elderly_aw_id_num_owner'=>$row['elderly_aw_id_num_owner'],
'elderly_aw_name_owner'=>$row['elderly_aw_name_owner'],
'elderly_aw_agency'=>$row['elderly_aw_agency'],
'elderly_aw_bank'=>$row['elderly_aw_bank'],
'elderly_aw_type_payment'=>$row['elderly_aw_type_payment'],
'elderly_aw_bank_num'=>$row['elderly_aw_bank_num'],
'elderly_aw_period_payment'=>$row['elderly_aw_period_payment'],
'elderly_aw_money'=>$row['elderly_aw_money'],
'elderly_aw_note'=>$row['elderly_aw_note'],