<?php
defined('BASEPATH') or exit('No direct script access allowed');

class p_welfare_backend extends CI_Controller
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
        $this->load->model('p_welfare_model');
    }

    public function index()
    {

        $data['query_one'] = $this->p_welfare_model->p_welfare_one();
        $data['query_under_one'] = $this->p_welfare_model->p_welfare_under_one();

        // $data['query'] = $this->p_welfare_model->list_all();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/p_welfare', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding_p_welfare()
    {

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/p_welfare_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    // public function get_departments()
    // {
    //     $group_name = $this->input->post('group_name');
    //     $p_welfareDepartments = $this->p_welfare_model->get_department_by_group($group_name);
    //     echo json_encode($p_welfareDepartments);
    // }


    public function add_p_welfare()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // exit;
        $this->p_welfare_model->add_p_welfare();
        redirect('p_welfare_backend', 'refresh');
    }

    public function editing_p_welfare($p_welfare_id)
    {
        $data['rsedit'] = $this->p_welfare_model->read($p_welfare_id);
        // $data['p_welfareGroup'] = $this->p_welfare_model->get_group();
        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/p_welfare_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit_p_welfare($p_welfare_id)
    {
        $this->p_welfare_model->edit_p_welfare($p_welfare_id);
        redirect('p_welfare_backend', 'refresh');
    }

    public function del_p_welfare($p_welfare_id)
    {
        $this->p_welfare_model->del_p_welfare($p_welfare_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('p_welfare_backend', 'refresh');
    }

    public function updatep_welfareStatus()
    {
        $this->p_welfare_model->updatep_welfareStatus();
    }
}
