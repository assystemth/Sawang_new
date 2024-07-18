<?php
class Pbsv_utilities_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
    }

    public function add()
    {
        // Configure PDF upload
        $pdf_config['upload_path'] = './docs/file';
        $pdf_config['allowed_types'] = 'pdf';
        $this->load->library('upload', $pdf_config, 'pdf_upload');

        // Configure image upload
        $img_config['upload_path'] = './docs/img';
        $img_config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $img_config, 'img_upload');

          // Configure Doc upload
          $doc_config['upload_path'] = './docs/file';
          $doc_config['allowed_types'] = 'doc|docx|xls|xlsx|ppt|pptx';
          $this->load->library('upload', $doc_config, 'doc_upload');

        // กำหนดค่าใน $pbsv_utilities_data
        $pbsv_utilities_data = array(
            'pbsv_utilities_name' => $this->input->post('pbsv_utilities_name'),
            'pbsv_utilities_detail' => $this->input->post('pbsv_utilities_detail'),
            'pbsv_utilities_date' => $this->input->post('pbsv_utilities_date'),
            'pbsv_utilities_link' => $this->input->post('pbsv_utilities_link'),
            'pbsv_utilities_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่แก้ไขข้อมูล
        );

        // ทำการอัปโหลดรูปภาพ
        $img_main = $this->img_upload->do_upload('pbsv_utilities_img');
        // ตรวจสอบว่ามีการอัปโหลดรูปภาพหรือไม่
        if (!empty($img_main)) {
            // ถ้ามีการอัปโหลดรูปภาพ
            $pbsv_utilities_data['pbsv_utilities_img'] = $this->img_upload->data('file_name');
        }
        // เพิ่มข้อมูลลงในฐานข้อมูล
        $this->db->insert('tbl_pbsv_utilities', $pbsv_utilities_data);
        $pbsv_utilities_id = $this->db->insert_id();

        // หาพื้นที่ว่าง และอัพโหลดlimit จากฐานข้อมูล
        $used_space = $this->space_model->get_used_space();
        $upload_limit = $this->space_model->get_limit_storage();

        $total_space_required = 0;
        // ตรวจสอบว่ามีข้อมูลรูปภาพเพิ่มเติมหรือไม่
        if (isset($_FILES['pbsv_utilities_img_img'])) {
            foreach ($_FILES['pbsv_utilities_img_img']['name'] as $index => $name) {
                if (isset($_FILES['pbsv_utilities_img_img']['size'][$index])) {
                    $total_space_required += $_FILES['pbsv_utilities_img_img']['size'][$index];
                }
            }
        }

        // ตรวจสอบว่ามีข้อมูลไฟล์ PDF หรือไม่
        if (isset($_FILES['pbsv_utilities_pdf_pdf'])) {
            foreach ($_FILES['pbsv_utilities_pdf_pdf']['name'] as $index => $name) {
                if (isset($_FILES['pbsv_utilities_pdf_pdf']['size'][$index])) {
                    $total_space_required += $_FILES['pbsv_utilities_pdf_pdf']['size'][$index];
                }
            }
        }

        // ตรวจสอบว่ามีข้อมูลไฟล์ doc หรือไม่
        if (isset($_FILES['pbsv_utilities_file_doc'])) {
            foreach ($_FILES['pbsv_utilities_file_doc']['name'] as $index => $name) {
                if (isset($_FILES['pbsv_utilities_file_doc']['size'][$index])) {
                    $total_space_required += $_FILES['pbsv_utilities_file_doc']['size'][$index];
                }
            }
        }

        // เช็คค่าว่าง
        if ($used_space + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('pbsv_utilities_backend/adding');
            return;
        }

        $imgs_data = array();

        // ตรวจสอบว่ามีการอัปโหลดรูปภาพเพิ่มเติมหรือไม่
        if (!empty($_FILES['pbsv_utilities_img_img']['name'][0])) {
            foreach ($_FILES['pbsv_utilities_img_img']['name'] as $index => $name) {
                $_FILES['pbsv_utilities_img_img_multiple']['name'] = $name;
                $_FILES['pbsv_utilities_img_img_multiple']['type'] = $_FILES['pbsv_utilities_img_img']['type'][$index];
                $_FILES['pbsv_utilities_img_img_multiple']['tmp_name'] = $_FILES['pbsv_utilities_img_img']['tmp_name'][$index];
                $_FILES['pbsv_utilities_img_img_multiple']['error'] = $_FILES['pbsv_utilities_img_img']['error'][$index];
                $_FILES['pbsv_utilities_img_img_multiple']['size'] = $_FILES['pbsv_utilities_img_img']['size'][$index];

                if ($this->img_upload->do_upload('pbsv_utilities_img_img_multiple')) {
                    $upload_data = $this->img_upload->data();
                    $imgs_data[] = array(
                        'pbsv_utilities_img_ref_id' => $pbsv_utilities_id,
                        'pbsv_utilities_img_img' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_pbsv_utilities_img', $imgs_data);
        }

        $pdf_data = array();

        // ตรวจสอบว่ามีการอัปโหลดไฟล์PDFเพิ่มเติมหรือไม่
        if (!empty($_FILES['pbsv_utilities_pdf_pdf']['name'][0])) {
            foreach ($_FILES['pbsv_utilities_pdf_pdf']['name'] as $index => $name) {
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['name'] = $name;
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['type'] = $_FILES['pbsv_utilities_pdf_pdf']['type'][$index];
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['tmp_name'] = $_FILES['pbsv_utilities_pdf_pdf']['tmp_name'][$index];
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['error'] = $_FILES['pbsv_utilities_pdf_pdf']['error'][$index];
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['size'] = $_FILES['pbsv_utilities_pdf_pdf']['size'][$index];

                if ($this->pdf_upload->do_upload('pbsv_utilities_pdf_pdf_multiple')) {
                    $upload_data = $this->pdf_upload->data();
                    $pdf_data[] = array(
                        'pbsv_utilities_pdf_ref_id' => $pbsv_utilities_id,
                        'pbsv_utilities_pdf_pdf' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_pbsv_utilities_pdf', $pdf_data);
        }

        $doc_data = array();

        // ตรวจสอบว่ามีการอัปโหลดไฟล์Docเพิ่มเติมหรือไม่
        if (!empty($_FILES['pbsv_utilities_file_doc']['name'][0])) {
            foreach ($_FILES['pbsv_utilities_file_doc']['name'] as $index => $name) {
                $_FILES['pbsv_utilities_file_doc_multiple']['name'] = $name;
                $_FILES['pbsv_utilities_file_doc_multiple']['type'] = $_FILES['pbsv_utilities_file_doc']['type'][$index];
                $_FILES['pbsv_utilities_file_doc_multiple']['tmp_name'] = $_FILES['pbsv_utilities_file_doc']['tmp_name'][$index];
                $_FILES['pbsv_utilities_file_doc_multiple']['error'] = $_FILES['pbsv_utilities_file_doc']['error'][$index];
                $_FILES['pbsv_utilities_file_doc_multiple']['size'] = $_FILES['pbsv_utilities_file_doc']['size'][$index];

                if ($this->doc_upload->do_upload('pbsv_utilities_file_doc_multiple')) {
                    $upload_data = $this->doc_upload->data();
                    $doc_data[] = array(
                        'pbsv_utilities_file_ref_id' => $pbsv_utilities_id,
                        'pbsv_utilities_file_doc' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_pbsv_utilities_file', $doc_data);
        }
        $this->space_model->update_server_current();
        $this->session->set_flashdata('save_success', TRUE);
    }

    public function list_all()
    {
        $this->db->select('*');
        $this->db->from('tbl_pbsv_utilities');
        $this->db->group_by('tbl_pbsv_utilities.pbsv_utilities_id');
        $this->db->order_by('tbl_pbsv_utilities.pbsv_utilities_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function list_all_pdf($pbsv_utilities_id)
    {
        $this->db->select('pbsv_utilities_pdf_pdf');
        $this->db->from('tbl_pbsv_utilities_pdf');
        $this->db->where('pbsv_utilities_pdf_ref_id', $pbsv_utilities_id);
        return $this->db->get()->result();
    }
    public function list_all_doc($pbsv_utilities_id)
    {
        $this->db->select('pbsv_utilities_file_doc');
        $this->db->from('tbl_pbsv_utilities_file');
        $this->db->where('pbsv_utilities_file_ref_id', $pbsv_utilities_id);
        return $this->db->get()->result();
    }

    //show form edit
    public function read($pbsv_utilities_id)
    {
        $this->db->where('pbsv_utilities_id', $pbsv_utilities_id);
        $query = $this->db->get('tbl_pbsv_utilities');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function read_pdf($pbsv_utilities_id)
    {
        $this->db->where('pbsv_utilities_pdf_ref_id', $pbsv_utilities_id);
        $this->db->order_by('pbsv_utilities_pdf_id', 'DESC');
        $query = $this->db->get('tbl_pbsv_utilities_pdf');
        return $query->result();
    }
    public function read_doc($pbsv_utilities_id)
    {
        $this->db->where('pbsv_utilities_file_ref_id', $pbsv_utilities_id);
        $this->db->order_by('pbsv_utilities_file_id', 'DESC');
        $query = $this->db->get('tbl_pbsv_utilities_file');
        return $query->result();
    }

    public function read_img($pbsv_utilities_id)
    {
        $this->db->where('pbsv_utilities_img_ref_id', $pbsv_utilities_id);
        $this->db->order_by('pbsv_utilities_img_id', 'DESC');
        $query = $this->db->get('tbl_pbsv_utilities_img');
        return $query->result();
    }

    public function del_pdf($pdf_id)
    {
        // ดึงชื่อไฟล์ PDF จากฐานข้อมูลโดยใช้ $pdf_id
        $this->db->select('pbsv_utilities_pdf_pdf');
        $this->db->where('pbsv_utilities_pdf_id', $pdf_id);
        $query = $this->db->get('tbl_pbsv_utilities_pdf');
        $file_data = $query->row();

        // ลบไฟล์จากแหล่งที่เก็บไฟล์ (อาจต้องใช้ unlink หรือวิธีอื่น)
        $file_path = './docs/file/' . $file_data->pbsv_utilities_pdf_pdf;
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        // ลบข้อมูลของไฟล์จากฐานข้อมูล
        $this->db->where('pbsv_utilities_pdf_id', $pdf_id);
        $this->db->delete('tbl_pbsv_utilities_pdf');
        $this->space_model->update_server_current();
        $this->session->set_flashdata('del_success', TRUE);
    }
    
    public function del_doc($doc_id)
    {
        // ดึงชื่อไฟล์ PDF จากฐานข้อมูลโดยใช้ $doc_id
        $this->db->select('pbsv_utilities_file_doc');
        $this->db->where('pbsv_utilities_file_id', $doc_id);
        $query = $this->db->get('tbl_pbsv_utilities_file');
        $file_data = $query->row();

        // ลบไฟล์จากแหล่งที่เก็บไฟล์ (อาจต้องใช้ unlink หรือวิธีอื่น)
        $file_path = './docs/file/' . $file_data->pbsv_utilities_file_doc;
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        // ลบข้อมูลของไฟล์จากฐานข้อมูล
        $this->db->where('pbsv_utilities_file_id', $doc_id);
        $this->db->delete('tbl_pbsv_utilities_file');
        $this->space_model->update_server_current();
        $this->session->set_flashdata('del_success', TRUE);
    }

    public function del_img($file_id)
    {
        // ดึงชื่อไฟล์ PDF จากฐานข้อมูลโดยใช้ $file_id
        $this->db->select('pbsv_utilities_img_img');
        $this->db->where('pbsv_utilities_img_id', $file_id);
        $query = $this->db->get('tbl_pbsv_utilities_img');
        $file_data = $query->row();

        // ลบไฟล์จากแหล่งที่เก็บไฟล์ (อาจต้องใช้ unlink หรือวิธีอื่น)
        $file_path = './docs/img/' . $file_data->pbsv_utilities_img_img;
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        // ลบข้อมูลของไฟล์จากฐานข้อมูล
        $this->db->where('pbsv_utilities_img_id', $file_id);
        $this->db->delete('tbl_pbsv_utilities_img');
        $this->space_model->update_server_current();
        $this->session->set_flashdata('del_success', TRUE);
    }


    public function edit($pbsv_utilities_id)
    {
        // Update pbsv_utilities information
        $data = array(
            'pbsv_utilities_name' => $this->input->post('pbsv_utilities_name'),
            'pbsv_utilities_detail' => $this->input->post('pbsv_utilities_detail'),
            'pbsv_utilities_date' => $this->input->post('pbsv_utilities_date'),
            'pbsv_utilities_link' => $this->input->post('pbsv_utilities_link'),
            'pbsv_utilities_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่แก้ไขข้อมูล
        );

        $this->db->where('pbsv_utilities_id', $pbsv_utilities_id);
        $this->db->update('tbl_pbsv_utilities', $data);

        // หาพื้นที่ว่าง และอัพโหลดlimit จากฐานข้อมูล
        $used_space = $this->space_model->get_used_space();
        $upload_limit = $this->space_model->get_limit_storage();

        $total_space_required = 0;
        // ตรวจสอบว่ามีข้อมูลรูปภาพเพิ่มเติมหรือไม่
        if (isset($_FILES['pbsv_utilities_img_img'])) {
            foreach ($_FILES['pbsv_utilities_img_img']['name'] as $index => $name) {
                if (isset($_FILES['pbsv_utilities_img_img']['size'][$index])) {
                    $total_space_required += $_FILES['pbsv_utilities_img_img']['size'][$index];
                }
            }
        }

        // ตรวจสอบว่ามีข้อมูลไฟล์ PDF หรือไม่
        if (isset($_FILES['pbsv_utilities_pdf_pdf'])) {
            foreach ($_FILES['pbsv_utilities_pdf_pdf']['name'] as $index => $name) {
                if (isset($_FILES['pbsv_utilities_pdf_pdf']['size'][$index])) {
                    $total_space_required += $_FILES['pbsv_utilities_pdf_pdf']['size'][$index];
                }
            }
        }

        // ตรวจสอบว่ามีข้อมูลไฟล์ doc หรือไม่
        if (isset($_FILES['pbsv_utilities_file_doc'])) {
            foreach ($_FILES['pbsv_utilities_file_doc']['name'] as $index => $name) {
                if (isset($_FILES['pbsv_utilities_file_doc']['size'][$index])) {
                    $total_space_required += $_FILES['pbsv_utilities_file_doc']['size'][$index];
                }
            }
        }

        // เช็คค่าว่าง
        if ($used_space + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('pbsv_utilities_backend/adding');
            return;
        }

        $pdf_config['upload_path'] = './docs/file';
        $pdf_config['allowed_types'] = 'pdf';
        $this->load->library('upload', $pdf_config, 'pdf_upload');

        $doc_config['upload_path'] = './docs/file';
        $doc_config['allowed_types'] = 'doc|docx|xls|xlsx|ppt|pptx';
        $this->load->library('upload', $doc_config, 'doc_upload');

        $img_config['upload_path'] = './docs/img';
        $img_config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $img_config, 'img_upload');

        // ทำการอัปโหลดรูปภาพ
        $img_main = $this->img_upload->do_upload('pbsv_utilities_img');

        // ตรวจสอบว่ามีการอัปโหลดรูปภาพหรือไม่
        if (!empty($img_main)) {
            $this->db->trans_start(); // เริ่ม Transaction

            // ดึงข้อมูลรูปเก่า
            $old_document = $this->db->get_where('tbl_pbsv_utilities', array('pbsv_utilities_id' => $pbsv_utilities_id))->row();

            // ตรวจสอบว่ามีไฟล์เก่าหรือไม่
            if ($old_document && $old_document->pbsv_utilities_img) {
                $old_file_path = './docs/img/' . $old_document->pbsv_utilities_img;

                if (file_exists($old_file_path)) {
                    unlink($old_file_path); // ลบไฟล์เก่า
                }
            }

            // ถ้ามีการอัปโหลดรูปภาพใหม่
            $img_data['pbsv_utilities_img'] = $this->img_upload->data('file_name');
            $this->db->where('pbsv_utilities_id', $pbsv_utilities_id);
            $this->db->update('tbl_pbsv_utilities', $img_data);

            $this->db->trans_complete(); // สิ้นสุด Transaction
        }

        $imgs_data = array();

        // ตรวจสอบว่ามีการอัปโหลดรูปภาพเพิ่มเติมหรือไม่
        if (!empty($_FILES['pbsv_utilities_img_img']['name'][0])) {

            foreach ($_FILES['pbsv_utilities_img_img']['name'] as $index => $name) {
                $_FILES['pbsv_utilities_img_img_multiple']['name'] = $name;
                $_FILES['pbsv_utilities_img_img_multiple']['type'] = $_FILES['pbsv_utilities_img_img']['type'][$index];
                $_FILES['pbsv_utilities_img_img_multiple']['tmp_name'] = $_FILES['pbsv_utilities_img_img']['tmp_name'][$index];
                $_FILES['pbsv_utilities_img_img_multiple']['error'] = $_FILES['pbsv_utilities_img_img']['error'][$index];
                $_FILES['pbsv_utilities_img_img_multiple']['size'] = $_FILES['pbsv_utilities_img_img']['size'][$index];

                if ($this->img_upload->do_upload('pbsv_utilities_img_img_multiple')) {
                    $upload_data = $this->img_upload->data();
                    $imgs_data[] = array(
                        'pbsv_utilities_img_ref_id' => $pbsv_utilities_id,
                        'pbsv_utilities_img_img' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_pbsv_utilities_img', $imgs_data);
        }

        $pdf_data = array();

        // ตรวจสอบว่ามีการอัปโหลด pdf เพิ่มเติมหรือไม่
        if (!empty($_FILES['pbsv_utilities_pdf_pdf']['name'][0])) {
            foreach ($_FILES['pbsv_utilities_pdf_pdf']['name'] as $index => $name) {
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['name'] = $name;
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['type'] = $_FILES['pbsv_utilities_pdf_pdf']['type'][$index];
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['tmp_name'] = $_FILES['pbsv_utilities_pdf_pdf']['tmp_name'][$index];
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['error'] = $_FILES['pbsv_utilities_pdf_pdf']['error'][$index];
                $_FILES['pbsv_utilities_pdf_pdf_multiple']['size'] = $_FILES['pbsv_utilities_pdf_pdf']['size'][$index];

                if ($this->pdf_upload->do_upload('pbsv_utilities_pdf_pdf_multiple')) {
                    $upload_data = $this->pdf_upload->data();
                    $pdf_data[] = array(
                        'pbsv_utilities_pdf_ref_id' => $pbsv_utilities_id,
                        'pbsv_utilities_pdf_pdf' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_pbsv_utilities_pdf', $pdf_data);
        }

        $doc_data = array();

        // ตรวจสอบว่ามีการอัปโหลด doc เพิ่มเติมหรือไม่
        if (!empty($_FILES['pbsv_utilities_file_doc']['name'][0])) {
            foreach ($_FILES['pbsv_utilities_file_doc']['name'] as $index => $name) {
                $_FILES['pbsv_utilities_file_doc_multiple']['name'] = $name;
                $_FILES['pbsv_utilities_file_doc_multiple']['type'] = $_FILES['pbsv_utilities_file_doc']['type'][$index];
                $_FILES['pbsv_utilities_file_doc_multiple']['tmp_name'] = $_FILES['pbsv_utilities_file_doc']['tmp_name'][$index];
                $_FILES['pbsv_utilities_file_doc_multiple']['error'] = $_FILES['pbsv_utilities_file_doc']['error'][$index];
                $_FILES['pbsv_utilities_file_doc_multiple']['size'] = $_FILES['pbsv_utilities_file_doc']['size'][$index];

                if ($this->doc_upload->do_upload('pbsv_utilities_file_doc_multiple')) {
                    $upload_data = $this->doc_upload->data();
                    $doc_data[] = array(
                        'pbsv_utilities_file_ref_id' => $pbsv_utilities_id,
                        'pbsv_utilities_file_doc' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_pbsv_utilities_file', $doc_data);
        }
        $this->space_model->update_server_current();
        $this->session->set_flashdata('save_success', TRUE);
    }

    public function del_pbsv_utilities($pbsv_utilities_id)
    {
        $old_document = $this->db->get_where('tbl_pbsv_utilities', array('pbsv_utilities_id' => $pbsv_utilities_id))->row();

        $old_file_path = './docs/img/' . $old_document->pbsv_utilities_img;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_pbsv_utilities', array('pbsv_utilities_id' => $pbsv_utilities_id));
        $this->space_model->update_server_current();
    }

    public function del_pbsv_utilities_pdf($pbsv_utilities_id)
    {
        // ดึงข้อมูลรายการ pdf ก่อน
        $files = $this->db->get_where('tbl_pbsv_utilities_pdf', array('pbsv_utilities_pdf_ref_id' => $pbsv_utilities_id))->result();

        // ลบ pdf จากตาราง tbl_pbsv_utilities_pdf
        $this->db->where('pbsv_utilities_pdf_ref_id', $pbsv_utilities_id);
        $this->db->delete('tbl_pbsv_utilities_pdf');

        // ลบไฟล์ pdf ที่เกี่ยวข้อง
        foreach ($files as $files) {
            $file_path = './docs/file/' . $files->pbsv_utilities_pdf_pdf;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    public function del_pbsv_utilities_doc($pbsv_utilities_id)
    {
        // ดึงข้อมูลรายการ doc ก่อน
        $files = $this->db->get_where('tbl_pbsv_utilities_file', array('pbsv_utilities_file_ref_id' => $pbsv_utilities_id))->result();

        // ลบ doc จากตาราง tbl_pbsv_utilities_file
        $this->db->where('pbsv_utilities_file_ref_id', $pbsv_utilities_id);
        $this->db->delete('tbl_pbsv_utilities_file');

        // ลบไฟล์ doc ที่เกี่ยวข้อง
        foreach ($files as $files) {
            $file_path = './docs/file/' . $files->pbsv_utilities_file_doc;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    public function del_pbsv_utilities_img($pbsv_utilities_id)
    {
        // ดึงข้อมูลรายการรูปภาพก่อน
        $files = $this->db->get_where('tbl_pbsv_utilities_img', array('pbsv_utilities_img_ref_id' => $pbsv_utilities_id))->result();

        // ลบรูปภาพจากตาราง tbl_pbsv_utilities_file
        $this->db->where('pbsv_utilities_img_ref_id', $pbsv_utilities_id);
        $this->db->delete('tbl_pbsv_utilities_img');

        // ลบไฟล์รูปภาพที่เกี่ยวข้อง
        foreach ($files as $files) {
            $file_path = './docs/img/' . $files->pbsv_utilities_img_img;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    public function update_pbsv_utilities_status()
    {
        // ตรวจสอบว่ามีการส่งข้อมูล POST มาหรือไม่
        if ($this->input->post()) {
            $pbsv_utilitiesId = $this->input->post('pbsv_utilities_id'); // รับค่า pbsv_utilities_id
            $newStatus = $this->input->post('new_status'); // รับค่าใหม่จาก switch checkbox

            // ทำการอัพเดตค่าในตาราง tbl_pbsv_utilities ในฐานข้อมูลของคุณ
            $data = array(
                'pbsv_utilities_status' => $newStatus
            );
            $this->db->where('pbsv_utilities_id', $pbsv_utilitiesId); // ระบุ pbsv_utilities_id ของแถวที่ต้องการอัพเดต
            $this->db->update('tbl_pbsv_utilities', $data);

            // ส่งการตอบกลับ (response) กลับไปยังเว็บไซต์หรือแอพพลิเคชันของคุณ
            // โดยเช่นปกติคุณอาจส่ง JSON response กลับมาเพื่ออัพเดตหน้าเว็บ
            $response = array('status' => 'success', 'message' => 'อัพเดตสถานะเรียบร้อย');
            echo json_encode($response);
        } else {
            // ถ้าไม่มีข้อมูล POST ส่งมา ให้รีเดอร์เปรียบเสมอ
            show_404();
        }
    }

    public function pbsv_utilities_frontend()
    {
        $this->db->select('*');
        $this->db->from('tbl_pbsv_utilities');
        $this->db->where('tbl_pbsv_utilities.pbsv_utilities_status', 'show');
        $this->db->limit(8);
        $this->db->order_by('tbl_pbsv_utilities.pbsv_utilities_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function pbsv_utilities_frontend_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_pbsv_utilities');
        $this->db->where('tbl_pbsv_utilities.pbsv_utilities_status', 'show');
        $this->db->order_by('tbl_pbsv_utilities.pbsv_utilities_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function increment_view($pbsv_utilities_id)
    {
        $this->db->where('pbsv_utilities_id', $pbsv_utilities_id);
        $this->db->set('pbsv_utilities_view', 'pbsv_utilities_view + 1', false); // บวกค่า pbsv_utilities_view ทีละ 1
        $this->db->update('tbl_pbsv_utilities');
    }
    // ใน pbsv_utilities_model
    public function increment_download_pbsv_utilities($pbsv_utilities_file_id)
    {
        $this->db->where('pbsv_utilities_file_id', $pbsv_utilities_file_id);
        $this->db->set('pbsv_utilities_file_download', 'pbsv_utilities_file_download + 1', false); // บวกค่า pbsv_utilities_download ทีละ 1
        $this->db->update('tbl_pbsv_utilities_file');
    }
}