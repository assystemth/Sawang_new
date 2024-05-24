<?php
class Calender_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
    }

    public function add_calender()
    {
        // Check used space
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();

        $total_space_required = 0;
        // $calender_imgs = $_FILES['calender_imgs'];

        // foreach ($calender_imgs['size'] as $size) {
        //     $total_space_required += $size;
        // }

        // Check if there's enough space
        if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('calender/adding_calender');
            return;
        }

        $calender_data = array(
            // 'calender_name' => $this->input->post('calender_name'),
            'calender_detail' => $this->input->post('calender_detail'),
            'calender_date' => $this->input->post('calender_date'),
            'calender_date_end' => $this->input->post('calender_date_end'),
            'calender_refer' => $this->input->post('calender_refer'),
            'calender_by' => $this->session->userdata('m_fname') // เพิ่มชื่อคนที่แก้ไขข้อมูล
        );

        $config['upload_path'] = './docs/img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        // $calender_img = $_FILES['calender_img'];
        // $calender_imgs = $_FILES['calender_imgs'];

        $this->db->trans_start();
        $this->db->insert('tbl_calender', $calender_data);
        $calender_id = $this->db->insert_id();

        // Upload and update calender_img
        // $_FILES['calender_img']['name'] = $calender_img['name'];
        // $_FILES['calender_img']['type'] = $calender_img['type'];
        // $_FILES['calender_img']['tmp_name'] = $calender_img['tmp_name'];
        // $_FILES['calender_img']['error'] = $calender_img['error'];
        // $_FILES['calender_img']['size'] = $calender_img['size'];

        // Upload main file
        if (!$this->upload->do_upload('calender_img')) {
            $this->session->set_flashdata('save_maxsize', TRUE);
            redirect('calender/adding_calender'); // กลับไปหน้าเดิม
            return; // ออกจากฟังก์ชันทันทีเมื่อขนาดเกิน
        }

        $upload_data = $this->upload->data();
        $calender_img_file = $upload_data['file_name'];

        // Update calender_img column with the uploaded image
        // $calender_img_data = array('calender_img' => $calender_img_file);
        $this->db->where('calender_id', $calender_id);
        // $this->db->update('tbl_calender', $calender_img_data);

        // Upload and insert data into tbl_calender_img
        $image_data = array(); // Initialize the array
        // foreach ($calender_imgs['name'] as $index => $name) {
        //     $_FILES['calender_img']['name'] = $name;
        //     $_FILES['calender_img']['type'] = $calender_imgs['type'][$index];
        //     $_FILES['calender_img']['tmp_name'] = $calender_imgs['tmp_name'][$index];
        //     $_FILES['calender_img']['error'] = $calender_imgs['error'][$index];
        //     $_FILES['calender_img']['size'] = $calender_imgs['size'][$index];

        //     if (!$this->upload->do_upload('calender_img')) {
        //         $this->session->set_flashdata('save_maxsize', TRUE);
        //         redirect('calender/adding_calender'); // กลับไปหน้าเดิม
        //         return;
        //     }

        //     $upload_data = $this->upload->data();
        //     $image_data[] = array(
        //         'calender_img_ref_id' => $calender_id,
        //         'calender_img_img' => $upload_data['file_name']
        //     );
        // }

        $this->db->insert_batch('tbl_calender_img', $image_data);

        $this->space_model->update_server_current();

        $this->db->trans_complete();

        $this->session->set_flashdata('save_success', TRUE);
    }

    public function list_admin()
    {
        // $this->db->select('a.*, GROUP_CONCAT(ai.calender_img_img) as additional_images');
        $this->db->from('tbl_calender as a');
        // $this->db->join('tbl_calender_img as ai', 'a.calender_id = ai.calender_img_ref_id', 'left');
        $this->db->group_by('a.calender_id');
        $this->db->order_by('a.calender_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    // public function list_user()
    // {
    //     $this->db->select('a.*, GROUP_CONCAT(ai.user_calender_img_img) as additional_images');
    //     $this->db->from('tbl_user_calender as a');
    //     $this->db->join('tbl_user_calender_img as ai', 'a.user_calender_id = ai.user_calender_img_ref_id', 'left');
    //     $this->db->group_by('a.user_calender_id');
    //     $this->db->order_by('a.user_calender_id', 'DESC');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // public function list_all()
    // {
    //     $this->db->select('a.*, GROUP_CONCAT(ai.calender_img_img) as additional_images');
    //     $this->db->from('tbl_calender as a');
    //     $this->db->join('tbl_calender_img as ai', 'a.calender_id = ai.calender_img_ref_id', 'left');
    //     $this->db->group_by('a.calender_id');
    //     $this->db->order_by('a.calender_id', 'DESC');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    //show form edit
    public function read_calender($calender_id)
    {
        $this->db->where('calender_id', $calender_id);
        $query = $this->db->get('tbl_calender');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function read_img_calender($calender_id)
    {
        // $this->db->where('calender_img_ref_id', $calender_id);
        // $this->db->order_by('calender_img_id', 'DESC');
        // $query = $this->db->get('tbl_calender_img');
        // return $query->result();
    }

    public function read_com_calender($calender_id)
    {
        $this->db->where('calender_com_ref_id', $calender_id);
        $this->db->order_by('calender_com_ref_id', 'DESC');
        $query = $this->db->get('tbl_calender_com');
        return $query->result();
    }

    public function read_com_reply_calender($calender_com_id)
    {
        $this->db->where('calender_com_reply_ref_id', $calender_com_id);
        $query = $this->db->get('tbl_calender_com_reply');
        return $query->result();
    }

    public function get_used_space()
    {
        $upload_folder = './docs'; // ตำแหน่งของโฟลเดอร์ที่คุณต้องการ

        $used_space = $this->calculateFolderSize($upload_folder);

        $used_space_mb = $used_space / (1024 * 1024 * 1024);
        return $used_space_mb;
    }
    private function calculateFolderSize($folder)
    {
        $used_space = 0;
        $files = scandir($folder);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $path = $folder . '/' . $file;
                if (is_file($path)) {
                    $used_space += filesize($path);
                } elseif (is_dir($path)) {
                    $used_space += $this->calculateFolderSize($path);
                }
            }
        }
        return $used_space;
    }

    public function edit_calender($calender_id)
    {
        $old_document = $this->db->get_where('tbl_calender', array('calender_id' => $calender_id))->row();

        // $update_doc_file = !empty($_FILES['calender_img']['name']) && $old_document->calender_img != $_FILES['calender_img']['name'];

        // ตรวจสอบว่ามีการอัพโหลดรูปภาพใหม่หรือไม่
        // if ($update_doc_file) {
        //     $old_file_path = './docs/img/' . $old_document->calender_img;
        //     if (file_exists($old_file_path)) {
        //         unlink($old_file_path);
        //     }

        //     // Check used space
        //     $used_space_mb = $this->space_model->get_used_space();
        //     $upload_limit_mb = $this->space_model->get_limit_storage();

        //     $total_space_required = 0;
        //     if (!empty($_FILES['calender_img']['name'])) {
        //         $total_space_required += $_FILES['calender_img']['size'];
        //     }

        //     if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
        //         $this->session->set_flashdata('save_error', TRUE);
        //         redirect('calender/editing_calender');
        //         return;
        //     }

        //     $config['upload_path'] = './docs/img';
        //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //     $this->load->library('upload', $config);

        //     if (!$this->upload->do_upload('calender_img')) {
        //         echo $this->upload->display_errors();
        //         return;
        //     }

        //     $data = $this->upload->data();
        //     $filename = $data['file_name'];
        // } else {
        //     // ใช้รูปภาพเดิม
        //     $filename = $old_document->calender_img;
        // }

        // Update calender information
        $data = array(
            // 'calender_name' => $this->input->post('calender_name'),
            'calender_detail' => $this->input->post('calender_detail'),
            'calender_date' => $this->input->post('calender_date'),
            'calender_date_end' => $this->input->post('calender_date_end'),
            'calender_refer' => $this->input->post('calender_refer'),
            'calender_by' => $this->session->userdata('m_fname') // เพิ่มชื่อคนที่แก้ไขข้อมูล
            // 'calender_img' => $filename
        );

        $this->db->where('calender_id', $calender_id);
        $this->db->update('tbl_calender', $data);

        // อัปโหลดและบันทึกไฟล์ใหม่ลงโฟลเดอร์
        // if (!empty($_FILES['calender_img_img']['name'])) {
        //     $upload_config['upload_path'] = './docs/img';
        //     $upload_config['allowed_types'] = 'gif|jpg|png|jpeg';
        //     $this->load->library('upload', $upload_config);

        //     $upload_success = true; // ตั้งค่าเริ่มต้นเป็น true

        //     foreach ($_FILES['calender_img_img']['name'] as $index => $name) {
        //         $_FILES['calender_img']['name'] = $name;
        //         $_FILES['calender_img']['type'] = $_FILES['calender_img_img']['type'][$index];
        //         $_FILES['calender_img']['tmp_name'] = $_FILES['calender_img_img']['tmp_name'][$index];
        //         $_FILES['calender_img']['error'] = $_FILES['calender_img_img']['error'][$index];
        //         $_FILES['calender_img']['size'] = $_FILES['calender_img_img']['size'][$index];

        //         if (!$this->upload->do_upload('calender_img')) {
        //             // echo $this->upload->display_errors();
        //             $upload_success = false; // หากเกิดข้อผิดพลาดในการอัปโหลด ตั้งค่าเป็น false
        //             break; // หยุดการทำงานลูป
        //         }

        //         $upload_data = $this->upload->data();
        //         $image_path = $upload_data['file_name'];

        //         // สร้างข้อมูลสำหรับบันทึกลงฐานข้อมูล tbl_calender_img
        //         $image_data = array(
        //             'calender_img_ref_id' => $calender_id,
        //             'calender_img_img' => $image_path
        //         );

        //         $this->db->insert('tbl_calender_img', $image_data);
        //     }

        //     if ($upload_success) {
        //         // ลบรูปภาพเก่าที่เกี่ยวข้องกับกิจกรรม
        //         $this->db->where('calender_img_ref_id', $calender_id);
        //         $existing_images = $this->db->get('tbl_calender_img')->result();

        //         foreach ($existing_images as $existing_image) {
        //             $old_file_path = './docs/img/' . $existing_image->calender_img_img;
        //             if (file_exists($old_file_path)) {
        //                 unlink($old_file_path);
        //             }
        //         }

        //         $this->db->where('calender_img_ref_id', $calender_id);
        //         $this->db->delete('tbl_calender_img');

        //         // เพิ่มรูปภาพใหม่ลงไป
        //         foreach ($_FILES['calender_img_img']['name'] as $index => $name) {
        //             $_FILES['calender_img']['name'] = $name;
        //             $_FILES['calender_img']['type'] = $_FILES['calender_img_img']['type'][$index];
        //             $_FILES['calender_img']['tmp_name'] = $_FILES['calender_img_img']['tmp_name'][$index];
        //             $_FILES['calender_img']['error'] = $_FILES['calender_img_img']['error'][$index];
        //             $_FILES['calender_img']['size'] = $_FILES['calender_img_img']['size'][$index];

        //             if (!$this->upload->do_upload('calender_img')) {
        //                 // echo $this->upload->display_errors();
        //                 break; // หยุดการทำงานลูปหากรูปภาพมีปัญหา
        //             }

        //             $upload_data = $this->upload->data();
        //             $image_path = $upload_data['file_name'];

        //             // สร้างข้อมูลสำหรับบันทึกลงฐานข้อมูล tbl_calender_img
        //             $image_data = array(
        //                 'calender_img_ref_id' => $calender_id,
        //                 'calender_img_img' => $image_path
        //             );

        //             $this->db->insert('tbl_calender_img', $image_data);
        //         }
        //     }
        // }
        $this->space_model->update_server_current();
        $this->session->set_flashdata('save_success', TRUE);
    }


    public function del_calender($calender_id)
    {
        $old_document = $this->db->get_where('tbl_calender', array('calender_id' => $calender_id))->row();

        // $old_file_path = './docs/img/' . $old_document->calender_img;
        // if (file_exists($old_file_path)) {
        //     unlink($old_file_path);
        // }

        $this->db->delete('tbl_calender', array('calender_id' => $calender_id));
        $this->space_model->update_server_current();
    }

    // public function del_calender_img($calender_id)
    // {
    //     // ดึงข้อมูลรายการรูปภาพก่อน
    //     $images = $this->db->get_where('tbl_calender_img', array('calender_img_ref_id' => $calender_id))->result();

    //     // ลบรูปภาพจากตาราง tbl_calender_img
    //     $this->db->where('calender_img_ref_id', $calender_id);
    //     $this->db->delete('tbl_calender_img');

    //     // ลบไฟล์รูปภาพที่เกี่ยวข้อง
    //     foreach ($images as $image) {
    //         $image_path = './docs/img/' . $image->calender_img_img;
    //         if (file_exists($image_path)) {
    //             unlink($image_path);
    //         }
    //     }
    // }

    public function updatecalenderStatus()
    {
        // ตรวจสอบว่ามีการส่งข้อมูล POST มาหรือไม่
        if ($this->input->post()) {
            $calenderId = $this->input->post('calender_id'); // รับค่า calender_id
            $newStatus = $this->input->post('new_status'); // รับค่าใหม่จาก switch checkbox

            // ทำการอัพเดตค่าในตาราง tbl_calender ในฐานข้อมูลของคุณ
            $data = array(
                'calender_status' => $newStatus
            );
            $this->db->where('calender_id', $calenderId); // ระบุ calender_id ของแถวที่ต้องการอัพเดต
            $this->db->update('tbl_calender', $data);

            // ส่งการตอบกลับ (response) กลับไปยังเว็บไซต์หรือแอพพลิเคชันของคุณ
            // โดยเช่นปกติคุณอาจส่ง JSON response กลับมาเพื่ออัพเดตหน้าเว็บ
            $response = array('status' => 'success', 'message' => 'อัพเดตสถานะเรียบร้อย');
            echo json_encode($response);
        } else {
            // ถ้าไม่มีข้อมูล POST ส่งมา ให้รีเดอร์เปรียบเสมอ
            show_404();
        }
    }

    public function del_com($calender_com_id)
    {
        return $this->db->where('calender_com_id', $calender_com_id)->delete('tbl_calender_com');
    }

    public function del_reply($calender_com_id)
    {
        return $this->db->where('calender_com_reply_ref_id', $calender_com_id)->delete('tbl_calender_com_reply');
    }

    public function del_com_reply($calender_com_reply_id)
    {
        return $this->db->where('calender_com_reply_id', $calender_com_reply_id)->delete('tbl_calender_com_reply');
    }

    // ส่วนของ user ***************************************************************************************************************************************************************************************************************************************************************
    public function read_user_calender($user_calender_id)
    {
        $this->db->where('user_calender_id', $user_calender_id);
        $query = $this->db->get('tbl_user_calender');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    // public function read_user_img_calender($user_calender_id)
    // {
    //     $this->db->where('user_calender_img_ref_id', $user_calender_id);
    //     $this->db->order_by('user_calender_img_id', 'DESC');
    //     $query = $this->db->get('tbl_user_calender_img');
    //     return $query->result();
    // }

    public function read_user_com_calender($user_calender_id)
    {
        $this->db->where('user_calender_com_ref_id', $user_calender_id);
        $this->db->order_by('user_calender_com_ref_id', 'DESC');
        $query = $this->db->get('tbl_user_calender_com');
        return $query->result();
    }

    public function read_user_com_reply_calender($user_calender_com_id)
    {
        $this->db->where('user_calender_com_reply_ref_id', $user_calender_com_id);
        $query = $this->db->get('tbl_user_calender_com_reply');
        return $query->result();
    }

    public function edit_User_calender($user_calender_id, $user_calender_name, $user_calender_detail, $user_calender_phone)
    {
        $old_document = $this->db->get_where('tbl_user_calender', array('user_calender_id' => $user_calender_id))->row();

        // $update_doc_file = !empty($_FILES['user_calender_img']['name']) && $old_document->user_calender_img != $_FILES['user_calender_img']['name'];

        // ตรวจสอบว่ามีการอัพโหลดรูปภาพใหม่หรือไม่
        // if ($update_doc_file) {
        //     $old_file_path = './docs/img/' . $old_document->user_calender_img;
        //     if (file_exists($old_file_path)) {
        //         unlink($old_file_path);
        //     }

        //     // Check used space
        //     $used_space_mb = $this->space_model->get_used_space();
        //     $upload_limit_mb = $this->space_model->get_limit_storage();

        //     $total_space_required = 0;
        //     if (!empty($_FILES['user_calender_img']['name'])) {
        //         $total_space_required += $_FILES['user_calender_img']['size'];
        //     }

        //     if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
        //         $this->session->set_flashdata('save_error', TRUE);
        //         redirect('calender/editing_User_calender');
        //         return;
        //     }

        //     $config['upload_path'] = './docs/img';
        //     $config['allowed_types'] = 'gif|jpg|png';
        //     $this->load->library('upload', $config);

        //     if (!$this->upload->do_upload('user_calender_img')) {
        //         echo $this->upload->display_errors();
        //         return;
        //     }

        //     $data = $this->upload->data();
        //     $filename = $data['file_name'];
        // } else {
        //     // ใช้รูปภาพเดิม
        //     $filename = $old_document->user_calender_img;
        // }

        // Update user_calender information
        $data = array(
            // 'user_calender_name' => $user_calender_name,
            'user_calender_detail' => $user_calender_detail,
            'user_calender_phone' => $user_calender_phone,
            'user_calender_by' => $this->session->userdata('m_fname') // เพิ่มชื่อคนที่แก้ไขข้อมูล
            // 'user_calender_img' => $filename
        );

        $this->db->where('user_calender_id', $user_calender_id);
        $this->db->update('tbl_user_calender', $data);

        // อัปโหลดและบันทึกไฟล์ใหม่ลงโฟลเดอร์
        // if (!empty($_FILES['user_calender_img_img']['name'])) {
        //     $upload_config['upload_path'] = './docs/img';
        //     $upload_config['allowed_types'] = 'gif|jpg|png';
        //     $this->load->library('upload', $upload_config);

        //     $upload_success = true; // ตั้งค่าเริ่มต้นเป็น true

        //     foreach ($_FILES['user_calender_img_img']['name'] as $index => $name) {
        //         $_FILES['user_calender_img']['name'] = $name;
        //         $_FILES['user_calender_img']['type'] = $_FILES['user_calender_img_img']['type'][$index];
        //         $_FILES['user_calender_img']['tmp_name'] = $_FILES['user_calender_img_img']['tmp_name'][$index];
        //         $_FILES['user_calender_img']['error'] = $_FILES['user_calender_img_img']['error'][$index];
        //         $_FILES['user_calender_img']['size'] = $_FILES['user_calender_img_img']['size'][$index];

        //         if (!$this->upload->do_upload('user_calender_img')) {
        //             // echo $this->upload->display_errors();
        //             $upload_success = false; // หากเกิดข้อผิดพลาดในการอัปโหลด ตั้งค่าเป็น false
        //             break; // หยุดการทำงานลูป
        //         }

        //         $upload_data = $this->upload->data();
        //         $image_path = $upload_data['file_name'];

        //         // สร้างข้อมูลสำหรับบันทึกลงฐานข้อมูล tbl_user_calender_img
        //         $image_data = array(
        //             'user_calender_img_ref_id' => $user_calender_id,
        //             'user_calender_img_img' => $image_path
        //         );

        //         $this->db->insert('tbl_user_calender_img', $image_data);
        //     }

        //     if ($upload_success) {
        //         // ลบรูปภาพเก่าที่เกี่ยวข้องกับกิจกรรม
        //         $this->db->where('user_calender_img_ref_id', $user_calender_id);
        //         $existing_images = $this->db->get('tbl_user_calender_img')->result();

        //         foreach ($existing_images as $existing_image) {
        //             $old_file_path = './docs/img/' . $existing_image->user_calender_img_img;
        //             if (file_exists($old_file_path)) {
        //                 unlink($old_file_path);
        //             }
        //         }

        //         $this->db->where('user_calender_img_ref_id', $user_calender_id);
        //         $this->db->delete('tbl_user_calender_img');

        //         // เพิ่มรูปภาพใหม่ลงไป
        //         foreach ($_FILES['user_calender_img_img']['name'] as $index => $name) {
        //             $_FILES['user_calender_img']['name'] = $name;
        //             $_FILES['user_calender_img']['type'] = $_FILES['user_calender_img_img']['type'][$index];
        //             $_FILES['user_calender_img']['tmp_name'] = $_FILES['user_calender_img_img']['tmp_name'][$index];
        //             $_FILES['user_calender_img']['error'] = $_FILES['user_calender_img_img']['error'][$index];
        //             $_FILES['user_calender_img']['size'] = $_FILES['user_calender_img_img']['size'][$index];

        //             if (!$this->upload->do_upload('user_calender_img')) {
        //                 // echo $this->upload->display_errors();
        //                 break; // หยุดการทำงานลูปหากรูปภาพมีปัญหา
        //             }

        //             $upload_data = $this->upload->data();
        //             $image_path = $upload_data['file_name'];

        //             // สร้างข้อมูลสำหรับบันทึกลงฐานข้อมูล tbl_user_calender_img
        //             $image_data = array(
        //                 'user_calender_img_ref_id' => $user_calender_id,
        //                 'user_calender_img_img' => $image_path
        //             );

        //             $this->db->insert('tbl_user_calender_img', $image_data);
        //         }
        //     }
        // }
        $this->space_model->update_server_current();
        $this->session->set_flashdata('save_success', TRUE);
    }

    public function del_user_calender($user_calender_id)
    {
        $old_document = $this->db->get_where('tbl_user_calender', array('user_calender_id' => $user_calender_id))->row();

        // $old_file_path = './docs/img/' . $old_document->user_calender_img;
        // if (file_exists($old_file_path)) {
        //     unlink($old_file_path);
        // }

        $this->db->delete('tbl_user_calender', array('user_calender_id' => $user_calender_id));
        $this->space_model->update_server_current();
    }

    // public function del_user_calender_img($user_calender_id)
    // {
    //     // ดึงข้อมูลรายการรูปภาพก่อน
    //     $images = $this->db->get_where('tbl_user_calender_img', array('user_calender_img_ref_id' => $user_calender_id))->result();

    //     // ลบรูปภาพจากตาราง tbl_user_calender_img
    //     $this->db->where('user_calender_img_ref_id', $user_calender_id);
    //     $this->db->delete('tbl_user_calender_img');

    //     // ลบไฟล์รูปภาพที่เกี่ยวข้อง
    //     foreach ($images as $image) {
    //         $image_path = './docs/img/' . $image->user_calender_img_img;
    //         if (file_exists($image_path)) {
    //             unlink($image_path);
    //         }
    //     }
    // }

    public function updateUsercalenderStatus()
    {
        // ตรวจสอบว่ามีการส่งข้อมูล POST มาหรือไม่
        if ($this->input->post()) {
            $usercalenderId = $this->input->post('user_calender_id'); // รับค่า calender_id
            $newStatus = $this->input->post('new_status'); // รับค่าใหม่จาก switch checkbox

            // ทำการอัพเดตค่าในตาราง tbl_calender ในฐานข้อมูลของคุณ
            $data = array(
                'user_calender_status' => $newStatus
            );
            $this->db->where('user_calender_id', $usercalenderId); // ระบุ calender_id ของแถวที่ต้องการอัพเดต
            $this->db->update('tbl_user_calender', $data);

            // ส่งการตอบกลับ (response) กลับไปยังเว็บไซต์หรือแอพพลิเคชันของคุณ
            // โดยเช่นปกติคุณอาจส่ง JSON response กลับมาเพื่ออัพเดตหน้าเว็บ
            $response = array('status' => 'success', 'message' => 'อัพเดตสถานะเรียบร้อย');
            echo json_encode($response);
        } else {
            // ถ้าไม่มีข้อมูล POST ส่งมา ให้รีเดอร์เปรียบเสมอ
            show_404();
        }
    }

    public function del_com_user($user_calender_com_id)
    {
        return $this->db->where('user_calender_com_id', $user_calender_com_id)->delete('tbl_user_calender_com');
    }

    public function del_reply_user($user_calender_com_id)
    {
        return $this->db->where('user_calender_com_reply_ref_id', $user_calender_com_id)->delete('tbl_user_calender_com_reply');
    }

    public function del_com_reply_user($user_calender_com_reply_id)
    {
        return $this->db->where('user_calender_com_reply_id', $user_calender_com_reply_id)->delete('tbl_user_calender_com_reply');
    }

    // ************************************************************************************************************

    public function sum_calender_views()
    {
        // คำนวณผลรวมของ tbl_calender
        $this->db->select('SUM(calender_view) as total_views');
        $this->db->from('tbl_calender');
        $query_calender = $this->db->get();

        // คำนวณผลรวมของ tbl_user_calender
        // $this->db->select('SUM(user_calender_view) as total_user_views');
        // $this->db->from('tbl_user_calender');
        // $query_user_calender = $this->db->get();

        // นำผลรวมของทั้งสองตารางมาบวกกัน
        // $total_views = $query_calender->row()->total_views + $query_user_calender->row()->total_user_views;
        $total_views = $query_calender->row()->total_views;

        return $total_views;
    }

    public function sum_calender_likes()
    {
        // คำนวณผลรวมของ tbl_calender
        $this->db->select('SUM(calender_like_like) as total_likes');
        $this->db->from('tbl_calender_like');
        $query_calender = $this->db->get();

        // คำนวณผลรวมของ tbl_user_calender
        // $this->db->select('SUM(user_calender_like_like) as total_user_likes');
        // $this->db->from('tbl_user_calender_like');
        // $query_user_calender = $this->db->get();

        // นำผลรวมของทั้งสองตารางมาบวกกัน
        // $total_likes = $query_calender->row()->total_likes + $query_user_calender->row()->total_user_likes;
        $total_likes = $query_calender->row()->total_likes;

        return $total_likes;
    }

    public function sum_calender_id()
    {
        // หาวันที่แรกของเดือนปัจจุบัน
        $start_of_current_month = date('Y-m-01');

        // หาวันที่แรกของเดือนถัดไป
        $start_of_next_month = date('Y-m-01', strtotime('+1 month'));

        // คำนวณผลรวมของ tbl_calender ที่มีวันที่อยู่ในเดือนปัจจุบันหรือเดือนถัดไป
        $this->db->select('SUM(calender_id) as total_id');
        $this->db->from('tbl_calender');
        $this->db->where('calender_datesave >=', $start_of_current_month);
        $this->db->where('calender_datesave <', $start_of_next_month);
        $query_calender = $this->db->get();

        // คำนวณผลรวมของ tbl_user_calender ที่มีวันที่อยู่ในเดือนปัจจุบันหรือเดือนถัดไป
        // $this->db->select('SUM(user_calender_id) as total_user_id');
        // $this->db->from('tbl_user_calender');
        // $this->db->where('user_calender_datesave >=', $start_of_current_month);
        // $this->db->where('user_calender_datesave <', $start_of_next_month);
        // $query_user_calender = $this->db->get();

        // นำผลรวมของทั้งสองตารางมาบวกกัน
        // $total_id = $query_calender->row()->total_id + $query_user_calender->row()->total_user_id;
        $total_id = $query_calender->row()->total_id;

        return $total_id;
    }

    public function calender_frontend()
    {
        $this->db->select('*');
        $this->db->from('tbl_calender');
        $this->db->where('tbl_calender.calender_status', 'show');
        $this->db->limit(10);
        $this->db->order_by('tbl_calender.calender_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function calender_frontend_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_calender');
        $this->db->where('tbl_calender.calender_status', 'show');
        $this->db->order_by('tbl_calender.calender_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    // public function read_img_calender_font($calender_id)
    // {
    //     $this->db->where('calender_img_ref_id', $calender_id);
    //     $this->db->order_by('calender_img_id', 'DESC');
    //     // $this->db->limit(4); // จำกัดจำนวนรูปเป็น 4 รูป
    //     $query = $this->db->get('tbl_calender_img');
    //     return $query->result();
    // }

    public function increment_calender_view($calender_id)
    {
        $this->db->where('calender_id', $calender_id);
        $this->db->set('calender_view', 'calender_view + 1', false); // บวกค่า calender_view ทีละ 1
        $this->db->update('tbl_calender');
    }

}
