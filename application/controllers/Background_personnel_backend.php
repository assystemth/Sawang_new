<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Background_personnel_backend extends CI_Controller
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
        $this->load->model('background_personnel_model');
    }

    public function index()
    {

        $data['query'] = $this->background_personnel_model->list_all();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/background_personnel', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding_background_personnel()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/background_personnel_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add_background_personnel()
    {
        $this->background_personnel_model->add_background_personnel();
        redirect('background_personnel_backend', 'refresh');
    }

    public function editing_background_personnel($background_personnel_id)
    {
        $data['rsedit'] = $this->background_personnel_model->read($background_personnel_id);

        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/background_personnel_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit_background_personnel($background_personnel_id)
    {
        $this->background_personnel_model->edit_background_personnel($background_personnel_id);
        redirect('background_personnel_backend', 'refresh');
    }

    public function del_background_personnel($background_personnel_id)
    {
        $this->background_personnel_model->del_background_personnel($background_personnel_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('background_personnel_backend', 'refresh');
    }

    public function updatebackground_personnelStatus()
    {
        $this->background_personnel_model->updatebackground_personnelStatus();
    }
}