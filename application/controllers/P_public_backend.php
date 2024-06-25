<?php
defined('BASEPATH') or exit('No direct script access allowed');

class p_public_backend extends CI_Controller
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
        $this->load->model('p_public_model');
    }

    public function index()
    {

        $data['query_one'] = $this->p_public_model->p_public_one();
        $data['query_under_one'] = $this->p_public_model->p_public_under_one();

        // $data['query'] = $this->p_public_model->list_all();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/p_public', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding_p_public()
    {

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/p_public_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    // public function get_departments()
    // {
    //     $group_name = $this->input->post('group_name');
    //     $p_publicDepartments = $this->p_public_model->get_department_by_group($group_name);
    //     echo json_encode($p_publicDepartments);
    // }


    public function add_p_public()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // exit;
        $this->p_public_model->add_p_public();
        redirect('p_public_backend', 'refresh');
    }

    public function editing_p_public($p_public_id)
    {
        $data['rsedit'] = $this->p_public_model->read($p_public_id);
        // $data['p_publicGroup'] = $this->p_public_model->get_group();
        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/p_public_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit_p_public($p_public_id)
    {
        $this->p_public_model->edit_p_public($p_public_id);
        redirect('p_public_backend', 'refresh');
    }

    public function del_p_public($p_public_id)
    {
        $this->p_public_model->del_p_public($p_public_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('p_public_backend', 'refresh');
    }

    public function updatep_publicStatus()
    {
        $this->p_public_model->updatep_publicStatus();
    }
}
