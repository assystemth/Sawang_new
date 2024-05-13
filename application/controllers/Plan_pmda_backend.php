<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Plan_pmda_backend extends CI_Controller
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
        $this->load->model('plan_pmda_model');
    }

    public function index()
    {
        $plan_pmda = $this->plan_pmda_model->list_all();

        foreach ($plan_pmda as $files) {
            $files->file = $this->plan_pmda_model->list_all_pdf($files->plan_pmda_id);
        }

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/plan_pmda', ['plan_pmda' => $plan_pmda]);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function adding()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/plan_pmda_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add()
    {
        $this->plan_pmda_model->add();
        redirect('plan_pmda_backend');
    }


    public function editing($plan_pmda_id)
    {
        $data['rsedit'] = $this->plan_pmda_model->read($plan_pmda_id);
        $data['rsFile'] = $this->plan_pmda_model->read_file($plan_pmda_id);
        $data['rsImg'] = $this->plan_pmda_model->read_img($plan_pmda_id);
        // echo '<pre>';
        // print_r($data['rsfile']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/plan_pmda_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit($plan_pmda_id)
    {
        $this->plan_pmda_model->edit($plan_pmda_id);
        redirect('plan_pmda_backend');
    }

    public function update_plan_pmda_status()
    {
        $this->plan_pmda_model->update_plan_pmda_status();
    }

    public function del_pdf($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->plan_pmda_model->del_pdf($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_img($file_id)
    {
        // เรียกใช้ฟังก์ชันใน Model เพื่อลบไฟล์ PDF ด้วย $file_id
        $this->plan_pmda_model->del_img($file_id);

        // ใส่สคริปต์ JavaScript เพื่อรีเฟรชหน้าเดิม
        echo '<script>window.history.back();</script>';
    }

    public function del_plan_pmda($plan_pmda_id)
    {
        $this->plan_pmda_model->del_plan_pmda_img($plan_pmda_id);
        $this->plan_pmda_model->del_plan_pmda_pdf($plan_pmda_id);
        $this->plan_pmda_model->del_plan_pmda($plan_pmda_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('plan_pmda_backend');
    }
}
