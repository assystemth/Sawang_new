<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Intra_share_file extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if (
        //     $this->session->userdata('m_level') != 1 &&
        //     $this->session->userdata('m_level') != 2 &&
        //     $this->session->userdata('m_level') != 3 &&
        //     $this->session->userdata('m_level') != 4 &&
        //     $this->session->userdata('m_level') != 5 &&
        //     $this->session->userdata('m_level') != 6 &&
        //     $this->session->userdata('m_level') != 7 &&
        //     $this->session->userdata('m_level') != 8 &&
        //     $this->session->userdata('m_level') != 9 &&
        //     $this->session->userdata('m_level') != 10 &&
        //     $this->session->userdata('m_level') != 11
        // ) {
        //     redirect('user', 'refresh');
        // }
        $this->load->model('space_model');
        $this->load->model('Intra_share_file_model');
    }
    public function index()
    {
        $data['storage'] = $this->space_model->list_all();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/share_file', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    // แชร์ไฟล์ภายในองค์กร **********************************************************************
    public function sf_all()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_all();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_all', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_all()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_all($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_all();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_all', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_all()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_all();
        redirect('Intra_share_file/sf_all');
    }

    public function del_intra_sf_all($intra_sf_all_id)
    {
        $this->Intra_share_file_model->del_intra_sf_all($intra_sf_all_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_all');
    }

    public function intra_sf_all_detail($intra_sf_all_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_all($intra_sf_all_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_all_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_all($intra_sf_all_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_all($intra_sf_all_id);
    }
    // ********************************************************************************


    // คณะผู้บริหาร **********************************************************************
    public function sf_executives()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_executives();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_executives', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_executives()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_executives($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_executives();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_executives', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_executives()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_executives();
        redirect('Intra_share_file/sf_executives');
    }

    public function del_intra_sf_executives($intra_sf_executives_id)
    {
        $this->Intra_share_file_model->del_intra_sf_executives($intra_sf_executives_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_executives');
    }

    public function intra_sf_executives_detail($intra_sf_executives_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_executives($intra_sf_executives_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_executives_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_executives($intra_sf_executives_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_executives($intra_sf_executives_id);
    }
    // ********************************************************************************

    // สมาชิกสถาตำบล **********************************************************************
    public function sf_council()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_council();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_council', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_council()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_council($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_council();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_council', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_council()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_council();
        redirect('Intra_share_file/sf_council');
    }

    public function del_intra_sf_council($intra_sf_council_id)
    {
        $this->Intra_share_file_model->del_intra_sf_council($intra_sf_council_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_council');
    }

    public function intra_sf_council_detail($intra_sf_council_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_council($intra_sf_council_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_council_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_council($intra_sf_council_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_council($intra_sf_council_id);
    }
    // ********************************************************************************

    // หัวหน้าส่วนราชการ **********************************************************************
    public function sf_unit_leaders()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_unit_leaders();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_unit_leaders', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_unit_leaders()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_unit_leaders($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_unit_leaders();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_unit_leaders', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_unit_leaders()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_unit_leaders();
        redirect('Intra_share_file/sf_unit_leaders');
    }

    public function del_intra_sf_unit_leaders($intra_sf_unit_leaders_id)
    {
        $this->Intra_share_file_model->del_intra_sf_unit_leaders($intra_sf_unit_leaders_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_unit_leaders');
    }

    public function intra_sf_unit_leaders_detail($intra_sf_unit_leaders_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_unit_leaders($intra_sf_unit_leaders_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_unit_leaders_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_unit_leaders($intra_sf_unit_leaders_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_unit_leaders($intra_sf_unit_leaders_id);
    }
    // ********************************************************************************

    // หัวหน้าส่วนราชการ **********************************************************************
    public function sf_deputy()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_deputy();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_deputy', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_deputy()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_deputy($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_deputy();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_deputy', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_deputy()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_deputy();
        redirect('Intra_share_file/sf_deputy');
    }

    public function del_intra_sf_deputy($intra_sf_deputy_id)
    {
        $this->Intra_share_file_model->del_intra_sf_deputy($intra_sf_deputy_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_deputy');
    }

    public function intra_sf_deputy_detail($intra_sf_deputy_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_deputy($intra_sf_deputy_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_deputy_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_deputy($intra_sf_deputy_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_deputy($intra_sf_deputy_id);
    }
    // ********************************************************************************

    // สำนักปลัด **********************************************************************
    public function sf_treasury()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_treasury();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_treasury', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_treasury()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_treasury($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_treasury();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_treasury', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_treasury()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_treasury();
        redirect('Intra_share_file/sf_treasury');
    }

    public function del_intra_sf_treasury($intra_sf_treasury_id)
    {
        $this->Intra_share_file_model->del_intra_sf_treasury($intra_sf_treasury_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_treasury');
    }

    public function intra_sf_treasury_detail($intra_sf_treasury_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_treasury($intra_sf_treasury_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_treasury_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_treasury($intra_sf_treasury_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_treasury($intra_sf_treasury_id);
    }
    // ********************************************************************************

    // กองศึกษา **********************************************************************
    public function sf_maintenance()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_maintenance();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_maintenance', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_maintenance()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_maintenance($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_maintenance();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_maintenance', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_maintenance()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_maintenance();
        redirect('Intra_share_file/sf_maintenance');
    }

    public function del_intra_sf_maintenance($intra_sf_maintenance_id)
    {
        $this->Intra_share_file_model->del_intra_sf_maintenance($intra_sf_maintenance_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_maintenance');
    }

    public function intra_sf_maintenance_detail($intra_sf_maintenance_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_maintenance($intra_sf_maintenance_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_maintenance_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_maintenance($intra_sf_maintenance_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_maintenance($intra_sf_maintenance_id);
    }
    // ********************************************************************************

    // กองช่าง **********************************************************************
    public function sf_education()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_education();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_education', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_education()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_education($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_education();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_education', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_education()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_education();
        redirect('Intra_share_file/sf_education');
    }

    public function del_intra_sf_education($intra_sf_education_id)
    {
        $this->Intra_share_file_model->del_intra_sf_education($intra_sf_education_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_education');
    }

    public function intra_sf_education_detail($intra_sf_education_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_education($intra_sf_education_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_education_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_education($intra_sf_education_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_education($intra_sf_education_id);
    }
    // ********************************************************************************

    // กองสาธารณสุข **********************************************************************
    public function sf_public()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_public();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_public', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_public()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_public($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_public();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_public', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_public()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_public();
        redirect('Intra_share_file/sf_public');
    }

    public function del_intra_sf_public($intra_sf_public_id)
    {
        $this->Intra_share_file_model->del_intra_sf_public($intra_sf_public_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_public');
    }

    public function intra_sf_public_detail($intra_sf_public_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_public($intra_sf_public_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_public_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_public($intra_sf_public_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_public($intra_sf_public_id);
    }
    // ********************************************************************************

    // กองสวัสดิการ **********************************************************************
    public function sf_welfare()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_welfare();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_welfare', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_welfare()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_welfare($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_welfare();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_welfare', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_welfare()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_welfare();
        redirect('Intra_share_file/sf_welfare');
    }

    public function del_intra_sf_welfare($intra_sf_welfare_id)
    {
        $this->Intra_share_file_model->del_intra_sf_welfare($intra_sf_welfare_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_welfare');
    }

    public function intra_sf_welfare_detail($intra_sf_welfare_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_welfare($intra_sf_welfare_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_welfare_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_welfare($intra_sf_welfare_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_welfare($intra_sf_welfare_id);
    }
    // ********************************************************************************

     // กำนัน / ผู้ใหญ่บ้าน **********************************************************************
     public function sf_learder()
     {
         $data['query'] = $this->Intra_share_file_model->list_sf_learder();
 
         $this->load->view('intranet_templat/header_new');
         $this->load->view('internet_asste/css_new');
         $this->load->view('intranet_templat/navbar_new');
         $this->load->view('intranet/sf_learder', $data);
         $this->load->view('internet_asste/js_new');
         $this->load->view('intranet_templat/footer_new');
     }
 
     public function search_sf_learder()
     {
         $search_term = $this->input->post('search_term');
 
         // ถ้ามีคำค้นหา
         if (!empty($search_term)) {
             $data['query'] = $this->Intra_share_file_model->search_sf_learder($search_term);
         } else {
             // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
             $data['query'] = $this->Intra_share_file_model->list_sf_learder();
         }
 
         $this->load->view('intranet_templat/header_new');
         $this->load->view('internet_asste/css_new');
         $this->load->view('intranet_templat/navbar_new');
         $this->load->view('intranet/sf_learder', $data);
         $this->load->view('internet_asste/js_new');
         $this->load->view('intranet_templat/footer_new');
     }
 
     public function add_intra_sf_learder()
     {
         // echo '<pre>';
         // print_r($_POST);
         // echo '</pre>';
         // echo '<pre>';
         // print_r($_FILES);
         // echo '</pre>';
         // exit;
         $this->Intra_share_file_model->add_intra_sf_learder();
         redirect('Intra_share_file/sf_learder');
     }
 
     public function del_intra_sf_learder($intra_sf_learder_id)
     {
         $this->Intra_share_file_model->del_intra_sf_learder($intra_sf_learder_id);
         $this->session->set_flashdata('del_success', TRUE);
         redirect('Intra_share_file/sf_learder');
     }
 
     public function intra_sf_learder_detail($intra_sf_learder_id)
     {
         $data['rsedit'] = $this->Intra_share_file_model->read_sf_learder($intra_sf_learder_id);
 
         $this->load->view('intranet_templat/header_new');
         $this->load->view('internet_asste/css_new');
         $this->load->view('intranet_templat/navbar_new');
         $this->load->view('intranet/sf_learder_detail', $data);
         $this->load->view('internet_asste/js_new');
         $this->load->view('intranet_templat/footer_new');
     }
 
     public function increment_download_intra_sf_learder($intra_sf_learder_id)
     {
         $this->Intra_share_file_model->increment_download_intra_sf_learder($intra_sf_learder_id);
     }
     // ********************************************************************************

     // หน่วยตรวจสอบภายใน **********************************************************************
    public function sf_audit()
    {
        $data['query'] = $this->Intra_share_file_model->list_sf_audit();

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_audit', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function search_sf_audit()
    {
        $search_term = $this->input->post('search_term');

        // ถ้ามีคำค้นหา
        if (!empty($search_term)) {
            $data['query'] = $this->Intra_share_file_model->search_sf_audit($search_term);
        } else {
            // ถ้าไม่มีคำค้นหา ดึงข้อมูลทั้งหมด
            $data['query'] = $this->Intra_share_file_model->list_sf_audit();
        }

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_audit', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function add_intra_sf_audit()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;
        $this->Intra_share_file_model->add_intra_sf_audit();
        redirect('Intra_share_file/sf_audit');
    }

    public function del_intra_sf_audit($intra_sf_audit_id)
    {
        $this->Intra_share_file_model->del_intra_sf_audit($intra_sf_audit_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('Intra_share_file/sf_audit');
    }

    public function intra_sf_audit_detail($intra_sf_audit_id)
    {
        $data['rsedit'] = $this->Intra_share_file_model->read_sf_audit($intra_sf_audit_id);

        $this->load->view('intranet_templat/header_new');
        $this->load->view('internet_asste/css_new');
        $this->load->view('intranet_templat/navbar_new');
        $this->load->view('intranet/sf_audit_detail', $data);
        $this->load->view('internet_asste/js_new');
        $this->load->view('intranet_templat/footer_new');
    }

    public function increment_download_intra_sf_audit($intra_sf_audit_id)
    {
        $this->Intra_share_file_model->increment_download_intra_sf_audit($intra_sf_audit_id);
    }
    // ********************************************************************************
}
