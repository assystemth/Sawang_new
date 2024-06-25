<?php
class Elderly_aw_ods_model extends CI_Model
{
    private $line_token = 'Iff0yJEZxd1xtZQDhWGKHltb455decobtxXQlDjlWST'; // เปลี่ยน 'YOUR_LINE_NOTIFY_TOKEN' เป็น LINE Notify token ของคุณ

    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
    }

    private function send_line_notify($message)
    {
        $url = "https://notify-api.line.me/api/notify";
        $headers = [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer ' . $this->line_token,
        ];
        $fields = 'message=' . urlencode($message);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    public function add_elderly_aw_ods()
    {
        // ตรวจสอบการใช้พื้นที่
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();

        // ถ้ามีการอัปโหลดรูปภาพ ให้ตรวจสอบพื้นที่ที่ต้องการ
        $total_space_required = 0;
        foreach (['elderly_aw_ods_file1', 'elderly_aw_ods_file2', 'elderly_aw_ods_file3'] as $file_key) {
            if (isset($_FILES[$file_key]) && !empty($_FILES[$file_key]['name'])) {
                $total_space_required += $_FILES[$file_key]['size'];
            }
        }

        // ตรวจสอบว่ามีพื้นที่เพียงพอหรือไม่
        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', 'พื้นที่ไม่เพียงพอ');
            redirect('Pages/elderly_aw_ods');
            return;
        }

        // เตรียมข้อมูลสำหรับการเพิ่มลงในตาราง
        $elderly_aw_ods_data = array(
            'elderly_aw_ods_by' => $this->input->post('elderly_aw_ods_by'),
            'elderly_aw_ods_phone' => $this->input->post('elderly_aw_ods_phone'),
            'elderly_aw_ods_number' => $this->input->post('elderly_aw_ods_number'),
            'elderly_aw_ods_address' => $this->input->post('elderly_aw_ods_address'),
        );

        // กำหนดการตั้งค่าอัปโหลด
        $config['upload_path'] = './docs/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $config['max_size'] = 2048; // ขนาดไฟล์สูงสุดเป็น KB (2MB)
        $this->load->library('upload', $config);

        // เก็บข้อผิดพลาดที่เกิดขึ้นในแต่ละไฟล์
        $upload_errors = [];
        $uploaded_files = [];

        foreach (['elderly_aw_ods_file1', 'elderly_aw_ods_file2', 'elderly_aw_ods_file3'] as $file_key) {
            if (isset($_FILES[$file_key]) && !empty($_FILES[$file_key]['name'])) {
                $this->upload->initialize($config);
                if (!$this->upload->do_upload($file_key)) {
                    // เก็บข้อผิดพลาด
                    $upload_errors[$file_key] = $this->upload->display_errors();
                } else {
                    // เก็บชื่อไฟล์ของไฟล์ที่อัปโหลด
                    $upload_data = $this->upload->data();
                    $elderly_aw_ods_data[$file_key] = $upload_data['file_name'];
                    $uploaded_files[] = $upload_data['file_name'];
                }
            }
        }

        // ถ้ามีข้อผิดพลาดในการอัปโหลดไฟล์ใด ๆ ให้แสดงข้อผิดพลาดและไม่บันทึกข้อมูลลงฐานข้อมูล
        if (!empty($upload_errors)) {
            // ลบไฟล์ที่อัปโหลดแล้ว (ถ้ามี) เพื่อป้องกันการเก็บไฟล์ที่ไม่สมบูรณ์
            foreach ($uploaded_files as $file) {
                @unlink($config['upload_path'] . '/' . $file);
            }

            // แสดงข้อผิดพลาด
            $error_message = implode('<br>', $upload_errors);
            $this->session->set_flashdata('upload_error', $error_message);
            redirect('Pages/elderly_aw_ods');
            return;
        }

        // เพิ่มข้อมูลลงในฐานข้อมูล
        $this->db->trans_start();
        $this->db->insert('tbl_elderly_aw_ods', $elderly_aw_ods_data);
        $this->db->trans_complete();

        // ตรวจสอบการทำธุรกรรม
        if ($this->db->trans_status() === FALSE) {
            // กรณีที่การเพิ่มข้อมูลล้มเหลว
            $this->session->set_flashdata('save_error', 'ไม่สามารถบันทึกข้อมูลได้');
        } else {
            // ตั้งค่า flash message สำหรับความสำเร็จ
            $this->session->set_flashdata('save_success', 'บันทึกข้อมูลสำเร็จ');

            // ดึงข้อมูลล่าสุดที่เพิ่มเข้ามาจากฐานข้อมูล
            $this->db->order_by('elderly_aw_ods_id', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('tbl_elderly_aw_ods');
            $latest_entry = $query->row();

            // สร้างข้อความแจ้งเตือน
            $message = "เอกสารเบี้ยยังชีพผู้สูงอายุ/ผู้พิการ ใหม่:\n";
            $message .= "ชื่อผู้ยื่นคำร้อง: " . $latest_entry->elderly_aw_ods_by . "\n";
            $message .= "โทรศัพท์: " . $latest_entry->elderly_aw_ods_phone . "\n";
            $message .= "ที่อยู่: " . $latest_entry->elderly_aw_ods_address . "\n";
            // $message .= "เอกสารแนบ: " . $latest_entry->elderly_aw_ods_file1 . "\n";
            $message .= "เอกสารแนบ: " . $latest_entry->elderly_aw_ods_file2 . "\n";
            // $message .= "เอกสารแนบ: " . $latest_entry->elderly_aw_ods_file3 . "\n";

            // ส่งแจ้งเตือนผ่าน LINE Notify
            $this->send_line_notify($message);
        }

        // อัปเดตการใช้พื้นที่ในเซิร์ฟเวอร์
        $this->space_model->update_server_current();

        // เปลี่ยนเส้นทางกลับไปยังหน้าฟอร์ม
        redirect('Pages/elderly_aw_ods');
    }

    // ฟังก์ชันอื่น ๆ ที่ไม่มีการแก้ไขคงอยู่เหมือนเดิม




    public function list_all()
    {
        $this->db->order_by('elderly_aw_ods_id', 'asc');
        $query = $this->db->get('tbl_elderly_aw_ods');
        return $query->result();
    }

    //show form edit
    public function read($elderly_aw_ods_id)
    {
        $this->db->where('elderly_aw_ods_id', $elderly_aw_ods_id);
        $query = $this->db->get('tbl_elderly_aw_ods');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function edit($elderly_aw_ods_id)
    {
        $old_document = $this->db->get_where('tbl_elderly_aw_ods', array('elderly_aw_ods_id' => $elderly_aw_ods_id))->row();

        $update_doc_file = !empty($_FILES['elderly_aw_ods_file']['name']) && $old_document->elderly_aw_ods_file != $_FILES['elderly_aw_ods_file']['name'];

        // ตรวจสอบว่ามีการอัพโหลดรูปภาพใหม่หรือไม่
        if ($update_doc_file) {
            $old_file_path = './docs/file/' . $old_document->elderly_aw_ods_file;
            if (file_exists($old_file_path)) {
                unlink($old_file_path);
            }

            // Check used space
            $used_space_mb = $this->space_model->get_used_space();
            $upload_limit_mb = $this->space_model->get_limit_storage();

            $total_space_required = 0;
            if (!empty($_FILES['elderly_aw_ods_file']['name'])) {
                $total_space_required += $_FILES['elderly_aw_ods_file']['size'];
            }

            if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
                $this->session->set_flashdata('save_error', TRUE);
                redirect('elderly_aw_ods/editing');
                return;
            }

            $config['upload_path'] = './docs/file';
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('elderly_aw_ods_file')) {
                echo $this->upload->display_errors();
                return;
            }

            $data = $this->upload->data();
            $filename = $data['file_name'];
        } else {
            // ใช้รูปภาพเดิม
            $filename = $old_document->elderly_aw_ods_file;
        }

        $data = array(
            'elderly_aw_ods_name' => $this->input->post('elderly_aw_ods_name'),
            'elderly_aw_ods_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่เพิ่มข้อมูล
            'elderly_aw_ods_file' => $filename
        );

        $this->db->where('elderly_aw_ods_id', $elderly_aw_ods_id);
        $query = $this->db->update('tbl_elderly_aw_ods', $data);

        $this->space_model->update_server_current();


        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาดในการอัปเดตข้อมูล !');";
            echo "</script>";
        }
    }

    public function elderly_aw_ods_frontend()
    {
        $this->db->select('*');
        $this->db->from('tbl_elderly_aw_ods');
        $query = $this->db->get();
        return $query->result();
    }
    public function increment_view()
    {
        $this->db->where('elderly_aw_ods_id', 1);
        $this->db->set('elderly_aw_ods_view', 'elderly_aw_ods_view + 1', false); // บวกค่า elderly_aw_ods_view ทีละ 1
        $this->db->update('tbl_elderly_aw_ods');
    }
    public function increment_download_elderly_aw_ods()
    {
        $this->db->where('elderly_aw_ods_id', 1);
        $this->db->set('elderly_aw_ods_download', 'elderly_aw_ods_download + 1', false); // บวกค่า elderly_aw_ods_view ทีละ 1
        $this->db->update('tbl_elderly_aw_ods');
    }
}
