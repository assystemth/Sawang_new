<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Text_run_esv_backend extends CI_Controller
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
        $this->load->model('text_run_esv_model');
    }

    public function index()
    {

        $data['query'] = $this->text_run_esv_model->list_all();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/text_run_esv', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding_text_run_esv()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/text_run_esv_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add_text_run_esv()
    {
        $this->text_run_esv_model->add_text_run_esv();
        redirect('text_run_esv_backend', 'refresh');
    }

    public function editing_text_run_esv($text_run_esv_id)
    {
        $data['rsedit'] = $this->text_run_esv_model->read($text_run_esv_id);

        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/text_run_esv_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit_text_run_esv($text_run_esv_id)
    {
        $this->text_run_esv_model->edit_text_run_esv($text_run_esv_id);
        redirect('text_run_esv_backend', 'refresh');
    }

    public function del_text_run_esv($text_run_esv_id)
    {
        $this->text_run_esv_model->del_text_run_esv($text_run_esv_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('text_run_esv_backend', 'refresh');
    }

    public function updatetext_run_esvStatus()
    {
        $this->text_run_esv_model->updatetext_run_esvStatus();
    }
}
