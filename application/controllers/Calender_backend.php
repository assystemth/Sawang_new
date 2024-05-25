<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calender_backend extends CI_Controller
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
        $this->load->model('calender_model');
    }

    public function index()
    {
        $data['qadmin'] = $this->calender_model->list_admin();
        $data['qimg'] = $this->calender_model->list_admin();
        // $data['quser'] = $this->calender_model->list_user();
        // $data['query'] = $this->calender_model->list_all();
        $data['used_space_mb'] = $this->space_model->get_used_space();
        // $data['upload_limit_mb'] = 35;
        $data['upload_limit_mb'] = $this->session->userdata('upload_limit_mb') ?? 35; // ตั้งค่าเริ่มต้นเป็น 35 MB

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/calender', $data);
        $this->load->view('asset/js');
        $this->load->view('asset/option_js');
        $this->load->view('templat/footer');
    }

    public function adding_calender()
    {
        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/calender_form_add');
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function add_calender()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // exit;
        $this->calender_model->add_calender();
        redirect('calender_backend', 'refresh');
    }

    public function editing_calender($calender_id)
    {
        $data['rsedit'] = $this->calender_model->read_calender($calender_id);
        $data['qimg'] = $this->calender_model->read_img_calender($calender_id);

        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/calender_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit_calender($calender_id)
    {
        $this->calender_model->edit_calender($calender_id);
        redirect('calender_backend', 'refresh');
    }

    public function del_calender($calender_id)
    {
        $this->calender_model->del_calender_img($calender_id);
        $this->calender_model->del_calender($calender_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('calender_backend', 'refresh');
    }

    public function updatecalenderStatus()
    {
        $this->calender_model->updatecalenderStatus();
    }

    public function editing_User_calender($user_travel_id)
    {
        $data['rsedit'] = $this->calender_model->read_user_calender($user_travel_id);
        $data['qimg'] = $this->calender_model->read_user_img_calender($user_travel_id);

        // echo '<pre>';
        // print_r($data['rsedit']);
        // echo '</pre>';
        // exit();

        $this->load->view('templat/header');
        $this->load->view('asset/css');
        $this->load->view('templat/navbar_system_admin');
        $this->load->view('system_admin/calender_user_form_edit', $data);
        $this->load->view('asset/js');
        $this->load->view('templat/footer');
    }

    public function edit_User_calender($user_calender_id)
    {
        $user_calender_name = $this->input->post('user_calender_name');
        $user_calender_detail = $this->input->post('user_calender_detail');
        $user_calender_phone = $this->input->post('user_calender_phone');

        $this->calender_model->edit_User_calender($user_calender_id, $user_calender_name, $user_calender_detail, $user_calender_phone);
        redirect('calender_backend', 'refresh');
    }

    public function del_User_calender($user_calender_id)
    {
        $this->calender_model->del_user_calender_img($user_calender_id);
        $this->calender_model->del_user_calender($user_calender_id);
        $this->session->set_flashdata('del_success', TRUE);
        redirect('calender_backend', 'refresh');
    }

    public function updateUsercalenderStatus()
    {
        $this->calender_model->updateUsercalenderStatus();
    }

    public function com($calender_id)
    {
        // อ่านข้อมูลเมนูอาหาร
        $data['calender'] = $this->calender_model->read_calender($calender_id);

        if (!empty($data['calender'])) {
            // อ่านข้อมูลความคิดเห็นที่เกี่ยวข้องกับอาหาร
            $data['rsCom'] = $this->calender_model->read_com_calender($calender_id);

            // อ่านข้อมูลความคิดเห็นตอบกลับที่เกี่ยวข้องกับความคิดเห็น
            foreach ($data['rsCom'] as $index => $com) {
                $calender_com_id = $com->calender_com_id;
                $com_reply_data = $this->calender_model->read_com_reply_calender($calender_com_id);

                // เก็บข้อมูลความคิดเห็นตอบกลับลงในอาร์เรย์ของความคิดเห็น
                $data['rsCom'][$index]->com_reply_data = $com_reply_data;
            }
            // echo '<pre>';
            // print_r($data['rsCom']);
            // echo '</pre>';
            // exit();
            // โหลดหน้า view และแสดงผล HTML
            $this->load->view('templat/header');
            $this->load->view('asset/css');
            $this->load->view('templat/navbar_system_admin');
            $this->load->view('system_admin/calender_com', $data);
            $this->load->view('asset/js');
            $this->load->view('templat/footer');
        } else {
            // หากไม่พบข้อมูลให้แสดงข้อความผิดพลาดหรือกระทำอื่นตามที่คุณต้องการ
            // ตัวอย่างเช่นแสดงข้อความผิดพลาด
            echo "ไม่พบข้อมูลอาหารที่เกี่ยวข้อง";
        }
    }

    public function del_com($calender_com_id)
    {
        $this->calender_model->del_reply($calender_com_id);
        $this->calender_model->del_com($calender_com_id);

        // ส่งคำตอบในรูปแบบ JSON เพื่อระบุว่าการลบสำเร็จ
        $response = array('success' => true);
        header('Content-Type: application/json');
        echo json_encode($response);
        $this->session->set_flashdata('del_success', TRUE);
    }

    public function del_com_reply($calender_com_reply_id)
    {
        $this->calender_model->del_com_reply($calender_com_reply_id);

        // ส่งคำตอบในรูปแบบ JSON เพื่อระบุว่าการลบสำเร็จ
        $response = array('success' => true);
        header('Content-Type: application/json');
        echo json_encode($response);
        $this->session->set_flashdata('del_success', TRUE);
    }

    public function com_user($user_calender_id)
    {
        // อ่านข้อมูลเมนูอาหาร
        $data['user_calender'] = $this->calender_model->read_user_calender($user_calender_id);

        if (!empty($data['user_calender'])) {
            // อ่านข้อมูลความคิดเห็นที่เกี่ยวข้องกับอาหาร
            $data['user_rsCom'] = $this->calender_model->read_user_com_calender($user_calender_id);

            // อ่านข้อมูลความคิดเห็นตอบกลับที่เกี่ยวข้องกับความคิดเห็น
            foreach ($data['user_rsCom'] as $index => $user_com) {
                $user_calender_com_id = $user_com->user_calender_com_id;
                $user_com_reply_data = $this->calender_model->read_user_com_reply_calender($user_calender_com_id);

                // เก็บข้อมูลความคิดเห็นตอบกลับลงในอาร์เรย์ของความคิดเห็น
                $data['user_rsCom'][$index]->user_com_reply_data = $user_com_reply_data;
            }

            // echo '<pre>';
            // print_r($data['user_rsCom']);
            // echo '</pre>';
            // exit();

            // โหลดหน้า view และแสดงผล HTML
            $this->load->view('templat/header');
            $this->load->view('asset/css');
            $this->load->view('templat/navbar_system_admin');
            $this->load->view('system_admin/calender_user_com', $data);
            $this->load->view('asset/js');
            $this->load->view('templat/footer');
        } else {
            // หากไม่พบข้อมูลให้แสดงข้อความผิดพลาดหรือกระทำอื่นตามที่คุณต้องการ
            // ตัวอย่างเช่นแสดงข้อความผิดพลาด
            echo "ไม่พบข้อมูลอาหารที่เกี่ยวข้อง";
        }
    }

    public function del_com_user($user_calender_com_id)
    {
        $this->calender_model->del_reply_user($user_calender_com_id);
        $this->calender_model->del_com_user($user_calender_com_id);

        // ส่งคำตอบในรูปแบบ JSON เพื่อระบุว่าการลบสำเร็จ
        $response = array('success' => true);
        header('Content-Type: application/json');
        echo json_encode($response);
        $this->session->set_flashdata('del_success', TRUE);
    }

    public function del_com_reply_user($user_calender_com_reply_id)
    {
        $this->calender_model->del_com_reply_user($user_calender_com_reply_id);

        // ส่งคำตอบในรูปแบบ JSON เพื่อระบุว่าการลบสำเร็จ
        $response = array('success' => true);
        header('Content-Type: application/json');
        echo json_encode($response);
        $this->session->set_flashdata('del_success', TRUE);
    }
}