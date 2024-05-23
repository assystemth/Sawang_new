<?php
class Background_personnel_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
    }

    public function add_background_personnel()
    {
        // Check used space
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();

        // Calculate the total space required for all files
        $total_space_required = 0;
        if (!empty($_FILES['background_personnel_img']['name'])) {
            $total_space_required += $_FILES['background_personnel_img']['size'];
        }

        // Check if there's enough space
        if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('background_personnel/adding_background_personnel');
            return;
        }

        // Upload configuration
        $config['upload_path'] = './docs/img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        // Upload main file
        if (!$this->upload->do_upload('background_personnel_img')) {
            // If the file size exceeds the max_size, set flash data and redirect
            $this->session->set_flashdata('save_maxsize', TRUE);
            redirect('background_personnel/adding_background_personnel');
            return;
        }

        $data = $this->upload->data();
        $filename = $data['file_name'];

        $data = array(
            'background_personnel_name' => $this->input->post('background_personnel_name'),
            'background_personnel_rank' => $this->input->post('background_personnel_rank'),
            'background_personnel_phone' => $this->input->post('background_personnel_phone'),
            'background_personnel_by' => $this->session->userdata('m_fname'),
            'background_personnel_img' => $filename
        );

        $query = $this->db->insert('tbl_background_personnel', $data);

        $this->space_model->update_server_current();

        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('Error !');";
            echo "</script>";
        }
    }

    public function list_all()
    {
        $this->db->order_by('background_personnel_id', 'DESC');
        $query = $this->db->get('tbl_background_personnel');
        return $query->result();
    }

    //show form edit
    public function read($background_personnel_id)
    {
        $this->db->where('background_personnel_id', $background_personnel_id);
        $query = $this->db->get('tbl_background_personnel');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function edit_background_personnel($background_personnel_id)
    {
        $old_document = $this->db->get_where('tbl_background_personnel', array('background_personnel_id' => $background_personnel_id))->row();

        $update_doc_file = !empty($_FILES['background_personnel_img']['name']) && $old_document->background_personnel_img != $_FILES['background_personnel_img']['name'];

        // ตรวจสอบว่ามีการอัพโหลดรูปภาพใหม่หรือไม่
        if ($update_doc_file) {
            $old_file_path = './docs/img/' . $old_document->background_personnel_img;
            if (file_exists($old_file_path)) {
                unlink($old_file_path);
            }

            // Check used space
            $used_space_mb = $this->space_model->get_used_space();
            $upload_limit_mb = $this->space_model->get_limit_storage();

            $total_space_required = 0;
            if (!empty($_FILES['background_personnel_img']['name'])) {
                $total_space_required += $_FILES['background_personnel_img']['size'];
            }

            if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
                $this->session->set_flashdata('save_error', TRUE);
                redirect('background_personnel/editing_background_personnel');
                return;
            }

            $config['upload_path'] = './docs/img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('background_personnel_img')) {
                echo $this->upload->display_errors();
                return;
            }

            $data = $this->upload->data();
            $filename = $data['file_name'];
        } else {
            // ใช้รูปภาพเดิม
            $filename = $old_document->background_personnel_img;
        }

        $data = array(
            'background_personnel_name' => $this->input->post('background_personnel_name'),
            'background_personnel_rank' => $this->input->post('background_personnel_rank'),
            'background_personnel_phone' => $this->input->post('background_personnel_phone'),
            'background_personnel_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่เพิ่มข้อมูล
            'background_personnel_img' => $filename
        );

        $this->db->where('background_personnel_id', $background_personnel_id);
        $query = $this->db->update('tbl_background_personnel', $data);

        $this->space_model->update_server_current();


        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาดในการอัปเดตข้อมูล !');";
            echo "</script>";
        }
    }

    public function del_background_personnel($background_personnel_id)
    {
        $old_document = $this->db->get_where('tbl_background_personnel', array('background_personnel_id' => $background_personnel_id))->row();

        $old_file_path = './docs/img/' . $old_document->background_personnel_img;
        if (file_exists($old_file_path)) {
            unrank($old_file_path);
        }

        $this->db->delete('tbl_background_personnel', array('background_personnel_id' => $background_personnel_id));
    }

    public function updatebackground_personnelStatus()
    {
        // ตรวจสอบว่ามีการส่งข้อมูล POST มาหรือไม่
        if ($this->input->post()) {
            $background_personnelId = $this->input->post('background_personnel_id'); // รับค่า background_personnel_id
            $newStatus = $this->input->post('new_status'); // รับค่าใหม่จาก switch checkbox

            // ทำการอัพเดตค่าในตาราง tbl_background_personnel ในฐานข้อมูลของคุณ
            $data = array(
                'background_personnel_status' => $newStatus
            );
            $this->db->where('background_personnel_id', $background_personnelId); // ระบุ background_personnel_id ของแถวที่ต้องการอัพเดต
            $this->db->update('tbl_background_personnel', $data);

            // ส่งการตอบกลับ (response) กลับไปยังเว็บไซต์หรือแอพพลิเคชันของคุณ
            // โดยเช่นปกติคุณอาจส่ง JSON response กลับมาเพื่ออัพเดตหน้าเว็บ
            $response = array('status' => 'success', 'message' => 'อัพเดตสถานะเรียบร้อย');
            echo json_encode($response);
        } else {
            // ถ้าไม่มีข้อมูล POST ส่งมา ให้รีเดอร์เปรียบเสมอ
            show_404();
        }
    }

    public function background_personnel_frontend()
    {
        $this->db->select('*');
        $this->db->from('tbl_background_personnel');
        $this->db->where('tbl_background_personnel.background_personnel_status', 'show');
        $this->db->order_by('tbl_background_personnel.background_personnel_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
}
