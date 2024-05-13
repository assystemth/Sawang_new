<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Intra_egp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if (
        //     $this->session->userdata('m_level') != 1 &&
        //     $this->session->userdata('m_level') != 2 &&
        //     $this->session->userdata('m_level') != 3 &&
        //     $this->session->userdata('m_level') != 4
        // ) {
        //     redirect('user', 'refresh');
        // }
        $this->load->model('intra_egp_model');
    }
    public function index()
    {
        $data['count_id_y2567'] = $this->intra_egp_model->count_project_id_y2567();
        $data['sum_money_y2567'] = $this->intra_egp_model->sum_project_money_without_comma_y2567();
        $data['sum_price_build_money_y2567'] = $this->intra_egp_model->sum_price_build_money_without_comma_y2567();
        $data['count_id_y2566'] = $this->intra_egp_model->count_project_id_y2566();
        $data['sum_money_y2566'] = $this->intra_egp_model->sum_project_money_without_comma_y2566();
        $data['sum_price_build_money_y2566'] = $this->intra_egp_model->sum_price_build_money_without_comma_y2566();
        $data['count_id_y2565'] = $this->intra_egp_model->count_project_id_y2565();
        $data['sum_money_y2565'] = $this->intra_egp_model->sum_project_money_without_comma_y2565();
        $data['sum_price_build_money_y2565'] = $this->intra_egp_model->sum_price_build_money_without_comma_y2565();
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // exit;
        
        $this->load->view('intranet_templat/header');
        $this->load->view('internet_asste/css');
        $this->load->view('intranet_templat/navbar');
        $this->load->view('intranet/egp', $data);
        $this->load->view('internet_asste/js');
        $this->load->view('internet_asste/php');
        $this->load->view('intranet_templat/footer');
    }
}
