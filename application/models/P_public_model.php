<?php
class P_public_model extends CI_Model
{ 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
    }

    public function add_p_public()
    {
        // Check used space
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();

        // Calculate the total space required for all files
        $total_space_required = 0;
        if (!empty($_FILES['p_public_img']['name'])) {
            $total_space_required += $_FILES['p_public_img']['size'];
        }

        // Check if there's enough space
        if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('p_public/adding_p_public');
            return;
        }

        $config['upload_path'] = './docs/img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        // Upload main file
        if (!$this->upload->do_upload('p_public_img')) {
            $this->session->set_flashdata('save_maxsize', TRUE);
            redirect('p_public/adding_p_public'); // กลับไปหน้าเดิม
            return;
        }
        $data = $this->upload->data();
        $filename =  $data['file_name'];


        $data = array(
            'p_public_name' => $this->input->post('p_public_name'),
            'p_public_rank' => $this->input->post('p_public_rank'),
            'p_public_phone' => $this->input->post('p_public_phone'),
            'p_public_row' => $this->input->post('p_public_row'),
            'p_public_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่เพิ่มข้อมูล
            'p_public_img' => $filename
        );

        $query = $this->db->insert('tbl_p_public', $data);

        $this->space_model->update_server_current();


        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('Error !');";
            echo "</script>";
        }
    }

    public function get_group()
    {
        $this->db->distinct();
        $this->db->select('pgroup_gname');
        $query = $this->db->get('tbl_p_public_group');
        return $query->result();
    }

    public function get_department_by_group($group_name)
    {
        $this->db->distinct();
        $this->db->select('pgroup_dname');
        $this->db->where('pgroup_gname', $group_name);
        $query = $this->db->get('tbl_p_public_group');
        return $query->result();
    }

    public function list_all()
    {
        $this->db->order_by('p_public_row', 'asc');
        $this->db->order_by('p_public_column', 'asc');
        $query = $this->db->get('tbl_p_public');
        return $query->result();
    }

    //show form edit
    public function read($p_public_id)
    {
        $this->db->where('p_public_id', $p_public_id);
        $query = $this->db->get('tbl_p_public');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function edit_p_public($p_public_id)
    {
        $old_document = $this->db->get_where('tbl_p_public', array('p_public_id' => $p_public_id))->row();

        $update_doc_file = !empty($_FILES['p_public_img']['name']) && $old_document->p_public_img != $_FILES['p_public_img']['name'];

        // ตรวจสอบว่ามีการอัพโหลดรูปภาพใหม่หรือไม่
        if ($update_doc_file) {
            $old_file_path = './docs/img/' . $old_document->p_public_img;
            if (file_exists($old_file_path)) {
                unlink($old_file_path);
            }

            // Check used space
            $used_space_mb = $this->space_model->get_used_space();
            $upload_limit_mb = $this->space_model->get_limit_storage();

            $total_space_required = 0;
            if (!empty($_FILES['p_public_img']['name'])) {
                $total_space_required += $_FILES['p_public_img']['size'];
            }

            if ($used_space_mb + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit_mb) {
                $this->session->set_flashdata('save_error', TRUE);
                redirect('p_public/editing_p_public');
                return;
            }

            $config['upload_path'] = './docs/img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('p_public_img')) {
                echo $this->upload->display_errors();
                return;
            }

            $data = $this->upload->data();
            $filename = $data['file_name'];
        } else {
            // ใช้รูปภาพเดิม
            $filename = $old_document->p_public_img;
        }

        $data = array(
            'p_public_name' => $this->input->post('p_public_name'),
            'p_public_rank' => $this->input->post('p_public_rank'),
            'p_public_phone' => $this->input->post('p_public_phone'),
            'p_public_column' => $this->input->post('p_public_column'),
            'p_public_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่เพิ่มข้อมูล
            'p_public_img' => $filename
        );

        $this->db->where('p_public_id', $p_public_id);
        $query = $this->db->update('tbl_p_public', $data);

        $this->space_model->update_server_current();

        // เปลี่ยนตำแหน่ง และ + 1 ค่าที่ *******
        $p_public_row = $old_document->p_public_row;

        $old_column = $old_document->p_public_column;
        $new_column = $this->input->post('p_public_column');

        // ดึงข้อมูลทั้งหมดจากฐานข้อมูล
        $all_column = $this->db->get('tbl_p_public')->result_array();

        // ตรวจสอบตำแหน่งที่มีค่ามากกว่าหรือเท่ากับตำแหน่งที่เปลี่ยนมา
        foreach ($all_column as $column) {
            if ($column['p_public_column'] >= $new_column && $column['p_public_column'] <= $old_column) {
                // ตำแหน่งใหม่ที่จะตั้ง
                $new_column_value = $column['p_public_column'] + 1;

                // อัปเดตตำแหน่งในฐานข้อมูล
                $this->db->where('p_public_id', $column['p_public_id']);
                $this->db->where('p_public_row', $p_public_row);
                $this->db->update('tbl_p_public', ['p_public_column' => $new_column_value]);
            }
        }

        // อัปเดตตำแหน่งของรายการที่กำลังแก้ไข
        $this->db->where('p_public_id', $p_public_id);
        $this->db->where('p_public_row', $p_public_row);
        $this->db->update('tbl_p_public', ['p_public_column' => $new_column]);

        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาดในการอัปเดตข้อมูล !');";
            echo "</script>";
        }
    }

    public function del_p_public($p_public_id)
    {
        $old_document = $this->db->get_where('tbl_p_public', array('p_public_id' => $p_public_id))->row();

        $old_file_path = './docs/img/' . $old_document->p_public_img;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        // อัพเดทข้อมูลในฐานข้อมูลให้ค่าว่างหรือ null
        $data = array(
            'p_public_name' => null,
            'p_public_rank' => null,
            'p_public_phone' => null,
            'p_public_img' => null,
            'p_public_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่เพิ่มข้อมูล
            // เพิ่มคอลัมน์อื่นๆ ที่ต้องการลบข้อมูล ให้ใส่ค่า null ด้วย
        );
        $this->db->where('p_public_id', $p_public_id);
        $this->db->update('tbl_p_public', $data);
    }

    public function p_public_one()
    {
        $this->db->select('*');
        $this->db->from('tbl_p_public');
        $this->db->where('tbl_p_public.p_public_id', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function p_public_under_one()
    {
        $this->db->select('*');
        $this->db->from('tbl_p_public');
        $this->db->where('tbl_p_public.p_public_id !=', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function p_public_frontend_one()
    {
        $this->db->select('*');
        $this->db->from('tbl_p_public');
        $this->db->where_in('tbl_p_public.p_public_id', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function p_public_row_1()
    {
        $this->db->select('*');
        $this->db->from('tbl_p_public');
        $this->db->where('tbl_p_public.p_public_row', 1);
        $this->db->where('tbl_p_public.p_public_id !=', 1);
        $this->db->order_by('tbl_p_public.p_public_column', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function p_public_row_2()
    {
        $this->db->select('*');
        $this->db->from('tbl_p_public');
        $this->db->where('tbl_p_public.p_public_row', 2);
        $this->db->where('tbl_p_public.p_public_id !=', 1);
        $this->db->order_by('tbl_p_public.p_public_column', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function p_public_row_3()
    {
        $this->db->select('*');
        $this->db->from('tbl_p_public');
        $this->db->where('tbl_p_public.p_public_row', 3);
        $this->db->where('tbl_p_public.p_public_id !=', 1);
        $this->db->order_by('tbl_p_public.p_public_column', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function p_public_row_4()
    {
        $this->db->select('*');
        $this->db->from('tbl_p_public');
        $this->db->where('tbl_p_public.p_public_row', 4);
        $this->db->where('tbl_p_public.p_public_id !=', 1);
        $this->db->order_by('tbl_p_public.p_public_column', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function p_public_row_5()
    {
        $this->db->select('*');
        $this->db->from('tbl_p_public');
        $this->db->where('tbl_p_public.p_public_row', 5);
        $this->db->where('tbl_p_public.p_public_id !=', 1);
        $this->db->order_by('tbl_p_public.p_public_column', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    // public function p_public_frontend_one()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_p_public');
    //     $this->db->where('tbl_p_public.p_public_rank', 'ผู้อำนวยการกองช่าง');
    //     $this->db->order_by('tbl_p_public.p_public_id', 'DESC');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // public function p_public_frontend_list()
    // {
    //     $positions_to_exclude = array(
    //         'ผู้อำนวยการกองช่าง',
    //     );

    //     $this->db->select('*');
    //     $this->db->from('tbl_p_public');
    //     $this->db->where_not_in('p_public_rank', $positions_to_exclude);
    //     $this->db->order_by('tbl_p_public.p_public_id', 'asc');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}
