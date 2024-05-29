<?php
defined('BASEPATH') or exit('No direct script access allowed');

class important_day_backend extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (
            $this->session->userdata('m_level') != 1 &&
            $this->session->userdata('m_level') != 2 &&
            $this->session->userdata('m_level') != 3 &&
            $this->session->userdata('m_level') != 4
        ) {
            redirect('user', 'refresh');
        }
        $this->load->model('member_model');
        $this->load->model('space_model');
        $this->load->model('important_day_model');
    }

    public function index()
    {

        $data['query'] = $this->important_day_model->list_all();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/important_day', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding_important_day()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/important_day_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add_important_day()
    {
        $this->important_day_model->add_important_day();
        redirect('important_day_backend', 'refresh');
    }

    public function editing_important_day($important_day_id)
    {
        $data['rsedit'] = $this->important_day_model->read($important_day_id);

        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/important_day_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit_important_day($important_day_id)
    {
        $this->important_day_model->edit_important_day($important_day_id);
        redirect('important_day_backend', 'refresh');
    }

    public function del_important_day($important_day_id)
    {
        $this->important_day_model->del_important_day($important_day_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('important_day_backend', 'refresh');
    }

    public function updateimportant_dayStatus()
    {
        $this->important_day_model->updateimportant_dayStatus();
    }
}
