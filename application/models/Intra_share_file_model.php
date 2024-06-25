<?php
class Intra_share_file_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
    }

    // แชร์ไฟล์ภายในองค์กร **********************************************************************
    public function add_intra_sf_all()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_all_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_all');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_all_name' => $this->input->post('intra_sf_all_name'),
            'intra_sf_all_by' => $this->session->userdata('m_fname'),
            'intra_sf_all_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_all', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_all()
    {
        $this->db->order_by('intra_sf_all_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_all');
        return $query->result();
    }

    public function del_intra_sf_all($intra_sf_all_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_all', array('intra_sf_all_id' => $intra_sf_all_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_all_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_all', array('intra_sf_all_id' => $intra_sf_all_id));
    }

    public function search_sf_all($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_all_name', $search_term);
        // $this->db->or_like('intra_sf_all_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_all');
        return $query->result();
    }

    public function read_sf_all($intra_sf_all_id)
    {
        $this->db->where('intra_sf_all_id', $intra_sf_all_id);
        $query = $this->db->get('tbl_intra_sf_all');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_all($intra_sf_all_id)
    {
        $this->db->where('intra_sf_all_id', $intra_sf_all_id);
        $this->db->set('intra_sf_all_download', 'intra_sf_all_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_all');
    }
    // ****************************************************************************************

    // คณะผู้บริหาร **********************************************************************
    public function add_intra_sf_executives()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_executives_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_executives');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_executives_name' => $this->input->post('intra_sf_executives_name'),
            'intra_sf_executives_by' => $this->session->userdata('m_fname'),
            'intra_sf_executives_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_executives', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_executives()
    {
        $this->db->order_by('intra_sf_executives_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_executives');
        return $query->result();
    }

    public function del_intra_sf_executives($intra_sf_executives_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_executives', array('intra_sf_executives_id' => $intra_sf_executives_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_executives_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_executives', array('intra_sf_executives_id' => $intra_sf_executives_id));
    }

    public function search_sf_executives($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_executives_name', $search_term);
        // $this->db->or_like('intra_sf_executives_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_executives');
        return $query->result();
    }

    public function read_sf_executives($intra_sf_executives_id)
    {
        $this->db->where('intra_sf_executives_id', $intra_sf_executives_id);
        $query = $this->db->get('tbl_intra_sf_executives');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_executives($intra_sf_executives_id)
    {
        $this->db->where('intra_sf_executives_id', $intra_sf_executives_id);
        $this->db->set('intra_sf_executives_download', 'intra_sf_executives_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_executives');
    }
    // ****************************************************************************************

    // สมาชิกสภาตำบล **********************************************************************
    public function add_intra_sf_council()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_council_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_council');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_council_name' => $this->input->post('intra_sf_council_name'),
            'intra_sf_council_by' => $this->session->userdata('m_fname'),
            'intra_sf_council_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_council', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_council()
    {
        $this->db->order_by('intra_sf_council_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_council');
        return $query->result();
    }

    public function del_intra_sf_council($intra_sf_council_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_council', array('intra_sf_council_id' => $intra_sf_council_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_council_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_council', array('intra_sf_council_id' => $intra_sf_council_id));
    }

    public function search_sf_council($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_council_name', $search_term);
        // $this->db->or_like('intra_sf_council_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_council');
        return $query->result();
    }

    public function read_sf_council($intra_sf_council_id)
    {
        $this->db->where('intra_sf_council_id', $intra_sf_council_id);
        $query = $this->db->get('tbl_intra_sf_council');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_council($intra_sf_council_id)
    {
        $this->db->where('intra_sf_council_id', $intra_sf_council_id);
        $this->db->set('intra_sf_council_download', 'intra_sf_council_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_council');
    }
    // ****************************************************************************************

    // แชร์ไฟล์ภายในองค์กร **********************************************************************
    public function add_intra_sf_unit_leaders()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_unit_leaders_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_unit_leaders');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_unit_leaders_name' => $this->input->post('intra_sf_unit_leaders_name'),
            'intra_sf_unit_leaders_by' => $this->session->userdata('m_fname'),
            'intra_sf_unit_leaders_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_unit_leaders', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_unit_leaders()
    {
        $this->db->order_by('intra_sf_unit_leaders_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_unit_leaders');
        return $query->result();
    }

    public function del_intra_sf_unit_leaders($intra_sf_unit_leaders_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_unit_leaders', array('intra_sf_unit_leaders_id' => $intra_sf_unit_leaders_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_unit_leaders_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_unit_leaders', array('intra_sf_unit_leaders_id' => $intra_sf_unit_leaders_id));
    }

    public function search_sf_unit_leaders($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_unit_leaders_name', $search_term);
        // $this->db->or_like('intra_sf_unit_leaders_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_unit_leaders');
        return $query->result();
    }

    public function read_sf_unit_leaders($intra_sf_unit_leaders_id)
    {
        $this->db->where('intra_sf_unit_leaders_id', $intra_sf_unit_leaders_id);
        $query = $this->db->get('tbl_intra_sf_unit_leaders');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_unit_leaders($intra_sf_unit_leaders_id)
    {
        $this->db->where('intra_sf_unit_leaders_id', $intra_sf_unit_leaders_id);
        $this->db->set('intra_sf_unit_leaders_download', 'intra_sf_unit_leaders_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_unit_leaders');
    }
    // ****************************************************************************************

    // สมาชิกสภาตำบล **********************************************************************
    public function add_intra_sf_deputy()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_deputy_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_deputy');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_deputy_name' => $this->input->post('intra_sf_deputy_name'),
            'intra_sf_deputy_by' => $this->session->userdata('m_fname'),
            'intra_sf_deputy_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_deputy', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_deputy()
    {
        $this->db->order_by('intra_sf_deputy_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_deputy');
        return $query->result();
    }

    public function del_intra_sf_deputy($intra_sf_deputy_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_deputy', array('intra_sf_deputy_id' => $intra_sf_deputy_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_deputy_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_deputy', array('intra_sf_deputy_id' => $intra_sf_deputy_id));
    }

    public function search_sf_deputy($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_deputy_name', $search_term);
        // $this->db->or_like('intra_sf_deputy_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_deputy');
        return $query->result();
    }

    public function read_sf_deputy($intra_sf_deputy_id)
    {
        $this->db->where('intra_sf_deputy_id', $intra_sf_deputy_id);
        $query = $this->db->get('tbl_intra_sf_deputy');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_deputy($intra_sf_deputy_id)
    {
        $this->db->where('intra_sf_deputy_id', $intra_sf_deputy_id);
        $this->db->set('intra_sf_deputy_download', 'intra_sf_deputy_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_deputy');
    }
    // ****************************************************************************************

    // แชร์ไฟล์ภายในองค์กร **********************************************************************
    public function add_intra_sf_treasury()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_treasury_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_treasury');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_treasury_name' => $this->input->post('intra_sf_treasury_name'),
            'intra_sf_treasury_by' => $this->session->userdata('m_fname'),
            'intra_sf_treasury_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_treasury', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_treasury()
    {
        $this->db->order_by('intra_sf_treasury_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_treasury');
        return $query->result();
    }

    public function del_intra_sf_treasury($intra_sf_treasury_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_treasury', array('intra_sf_treasury_id' => $intra_sf_treasury_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_treasury_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_treasury', array('intra_sf_treasury_id' => $intra_sf_treasury_id));
    }

    public function search_sf_treasury($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_treasury_name', $search_term);
        // $this->db->or_like('intra_sf_treasury_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_treasury');
        return $query->result();
    }

    public function read_sf_treasury($intra_sf_treasury_id)
    {
        $this->db->where('intra_sf_treasury_id', $intra_sf_treasury_id);
        $query = $this->db->get('tbl_intra_sf_treasury');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_treasury($intra_sf_treasury_id)
    {
        $this->db->where('intra_sf_treasury_id', $intra_sf_treasury_id);
        $this->db->set('intra_sf_treasury_download', 'intra_sf_treasury_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_treasury');
    }
    // ****************************************************************************************

    // กองช่าง **********************************************************************
    public function add_intra_sf_maintenance()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_maintenance_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_maintenance');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_maintenance_name' => $this->input->post('intra_sf_maintenance_name'),
            'intra_sf_maintenance_by' => $this->session->userdata('m_fname'),
            'intra_sf_maintenance_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_maintenance', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_maintenance()
    {
        $this->db->order_by('intra_sf_maintenance_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_maintenance');
        return $query->result();
    }

    public function del_intra_sf_maintenance($intra_sf_maintenance_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_maintenance', array('intra_sf_maintenance_id' => $intra_sf_maintenance_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_maintenance_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_maintenance', array('intra_sf_maintenance_id' => $intra_sf_maintenance_id));
    }

    public function search_sf_maintenance($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_maintenance_name', $search_term);
        // $this->db->or_like('intra_sf_maintenance_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_maintenance');
        return $query->result();
    }

    public function read_sf_maintenance($intra_sf_maintenance_id)
    {
        $this->db->where('intra_sf_maintenance_id', $intra_sf_maintenance_id);
        $query = $this->db->get('tbl_intra_sf_maintenance');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_maintenance($intra_sf_maintenance_id)
    {
        $this->db->where('intra_sf_maintenance_id', $intra_sf_maintenance_id);
        $this->db->set('intra_sf_maintenance_download', 'intra_sf_maintenance_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_maintenance');
    }
    // ****************************************************************************************

    // กองศึกษา **********************************************************************
    public function add_intra_sf_education()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_education_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_education');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_education_name' => $this->input->post('intra_sf_education_name'),
            'intra_sf_education_by' => $this->session->userdata('m_fname'),
            'intra_sf_education_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_education', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_education()
    {
        $this->db->order_by('intra_sf_education_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_education');
        return $query->result();
    }

    public function del_intra_sf_education($intra_sf_education_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_education', array('intra_sf_education_id' => $intra_sf_education_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_education_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_education', array('intra_sf_education_id' => $intra_sf_education_id));
    }

    public function search_sf_education($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_education_name', $search_term);
        // $this->db->or_like('intra_sf_education_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_education');
        return $query->result();
    }

    public function read_sf_education($intra_sf_education_id)
    {
        $this->db->where('intra_sf_education_id', $intra_sf_education_id);
        $query = $this->db->get('tbl_intra_sf_education');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_education($intra_sf_education_id)
    {
        $this->db->where('intra_sf_education_id', $intra_sf_education_id);
        $this->db->set('intra_sf_education_download', 'intra_sf_education_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_education');
    }
    // ****************************************************************************************

    // กองสาธารณสุข **********************************************************************
    public function add_intra_sf_public()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_public_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_public');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_public_name' => $this->input->post('intra_sf_public_name'),
            'intra_sf_public_by' => $this->session->userdata('m_fname'),
            'intra_sf_public_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_public', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_public()
    {
        $this->db->order_by('intra_sf_public_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_public');
        return $query->result();
    }

    public function del_intra_sf_public($intra_sf_public_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_public', array('intra_sf_public_id' => $intra_sf_public_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_public_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_public', array('intra_sf_public_id' => $intra_sf_public_id));
    }

    public function search_sf_public($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_public_name', $search_term);
        // $this->db->or_like('intra_sf_public_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_public');
        return $query->result();
    }

    public function read_sf_public($intra_sf_public_id)
    {
        $this->db->where('intra_sf_public_id', $intra_sf_public_id);
        $query = $this->db->get('tbl_intra_sf_public');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_public($intra_sf_public_id)
    {
        $this->db->where('intra_sf_public_id', $intra_sf_public_id);
        $this->db->set('intra_sf_public_download', 'intra_sf_public_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_public');
    }
    // ****************************************************************************************


    // กองสวัสดิการ **********************************************************************
    public function add_intra_sf_welfare()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_welfare_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_welfare');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_welfare_name' => $this->input->post('intra_sf_welfare_name'),
            'intra_sf_welfare_by' => $this->session->userdata('m_fname'),
            'intra_sf_welfare_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_welfare', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_welfare()
    {
        $this->db->order_by('intra_sf_welfare_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_welfare');
        return $query->result();
    }

    public function del_intra_sf_welfare($intra_sf_welfare_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_welfare', array('intra_sf_welfare_id' => $intra_sf_welfare_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_welfare_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_welfare', array('intra_sf_welfare_id' => $intra_sf_welfare_id));
    }

    public function search_sf_welfare($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_welfare_name', $search_term);
        // $this->db->or_like('intra_sf_welfare_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_welfare');
        return $query->result();
    }

    public function read_sf_welfare($intra_sf_welfare_id)
    {
        $this->db->where('intra_sf_welfare_id', $intra_sf_welfare_id);
        $query = $this->db->get('tbl_intra_sf_welfare');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_welfare($intra_sf_welfare_id)
    {
        $this->db->where('intra_sf_welfare_id', $intra_sf_welfare_id);
        $this->db->set('intra_sf_welfare_download', 'intra_sf_welfare_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_welfare');
    }
    // ****************************************************************************************

    // กำนัน / ผู้ใหญ่บ้าน **********************************************************************
    public function add_intra_sf_learder()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_learder_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_learder');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_learder_name' => $this->input->post('intra_sf_learder_name'),
            'intra_sf_learder_by' => $this->session->userdata('m_fname'),
            'intra_sf_learder_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_learder', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_learder()
    {
        $this->db->order_by('intra_sf_learder_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_learder');
        return $query->result();
    }

    public function del_intra_sf_learder($intra_sf_learder_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_learder', array('intra_sf_learder_id' => $intra_sf_learder_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_learder_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_learder', array('intra_sf_learder_id' => $intra_sf_learder_id));
    }

    public function search_sf_learder($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_learder_name', $search_term);
        // $this->db->or_like('intra_sf_learder_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_learder');
        return $query->result();
    }

    public function read_sf_learder($intra_sf_learder_id)
    {
        $this->db->where('intra_sf_learder_id', $intra_sf_learder_id);
        $query = $this->db->get('tbl_intra_sf_learder');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_learder($intra_sf_learder_id)
    {
        $this->db->where('intra_sf_learder_id', $intra_sf_learder_id);
        $this->db->set('intra_sf_learder_download', 'intra_sf_learder_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_learder');
    }
    // ****************************************************************************************

    // หน่วยตรวจสอบภายใน **********************************************************************
    public function add_intra_sf_audit()
    {
        $config['upload_path'] = './docs/intranet/file';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('intra_sf_audit_pdf')) {
            // ไม่สามารถอัปโหลดไฟล์ได้
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
        }

        // สำเร็จในการอัปโหลดไฟล์
        $data = $this->upload->data();
        $filename = $data['file_name'];

        // ตรวจสอบพื้นที่ในการบันทึก
        $used_space_mb = $this->space_model->get_used_space();
        $upload_limit_mb = $this->space_model->get_limit_storage();
        $total_space_required = $data['file_size'];

        if ($used_space_mb + ($total_space_required / (1024 * 1024)) >= $upload_limit_mb) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('Intra_sf_audit');
            return;
        }

        // ข้อมูลสำหรับบันทึกลงในฐานข้อมูล
        $insert_data = array(
            'intra_sf_audit_name' => $this->input->post('intra_sf_audit_name'),
            'intra_sf_audit_by' => $this->session->userdata('m_fname'),
            'intra_sf_audit_pdf' => $filename
        );

        // บันทึกลงในฐานข้อมูล
        $query = $this->db->insert('tbl_intra_sf_audit', $insert_data);

        // อัพเดตข้อมูลพื้นที่ในการใช้งาน
        $this->space_model->update_server_current();

        // ตรวจสอบความสำเร็จของการบันทึก
        if ($query) {
            $this->session->set_flashdata('save_success', TRUE);
        } else {
            $this->session->set_flashdata('save_error', TRUE);
        }
    }

    public function list_sf_audit()
    {
        $this->db->order_by('intra_sf_audit_id', 'DESC');
        $query = $this->db->get('tbl_intra_sf_audit');
        return $query->result();
    }

    public function del_intra_sf_audit($intra_sf_audit_id)
    {
        // ดึงข้อมูลรูปเก่า
        $old_document = $this->db->get_where('tbl_intra_sf_audit', array('intra_sf_audit_id' => $intra_sf_audit_id))->row();

        $old_file_path = './docs/intranet/file/' . $old_document->intra_sf_audit_pdf;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_intra_sf_audit', array('intra_sf_audit_id' => $intra_sf_audit_id));
    }

    public function search_sf_audit($search_term)
    {
        // ปรับแต่ง query ตามความต้องการ
        $this->db->like('intra_sf_audit_name', $search_term);
        // $this->db->or_like('intra_sf_audit_pdf', $search_term);
        // เพิ่มเงื่อนไขค้นหาเพิ่มเติมตามความต้องการ

        $query = $this->db->get('tbl_intra_sf_audit');
        return $query->result();
    }

    public function read_sf_audit($intra_sf_audit_id)
    {
        $this->db->where('intra_sf_audit_id', $intra_sf_audit_id);
        $query = $this->db->get('tbl_intra_sf_audit');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function increment_download_intra_sf_audit($intra_sf_audit_id)
    {
        $this->db->where('intra_sf_audit_id', $intra_sf_audit_id);
        $this->db->set('intra_sf_audit_download', 'intra_sf_audit_download + 1', false); // บวกค่า operation_policy_hr_download ทีละ 1
        $this->db->update('tbl_intra_sf_audit');
    }
    // ****************************************************************************************
}
