<?php
class News_model extends CI_Model
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

        // กำหนดค่าใน $news_data
        $news_data = array(
            'news_name' => $this->input->post('news_name'),
            'news_detail' => $this->input->post('news_detail'),
            'news_date' => $this->input->post('news_date'),
            'news_link' => $this->input->post('news_link'),
            'news_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่แก้ไขข้อมูล
        );

        // ทำการอัปโหลดรูปภาพ
        $img_main = $this->img_upload->do_upload('news_img');
        // ตรวจสอบว่ามีการอัปโหลดรูปภาพหรือไม่
        if (!empty($img_main)) {
            // ถ้ามีการอัปโหลดรูปภาพ
            $news_data['news_img'] = $this->img_upload->data('file_name');
        }
        // เพิ่มข้อมูลลงในฐานข้อมูล
        $this->db->insert('tbl_news', $news_data);
        $news_id = $this->db->insert_id();

        // หาพื้นที่ว่าง และอัพโหลดlimit จากฐานข้อมูล
        $used_space = $this->space_model->get_used_space();
        $upload_limit = $this->space_model->get_limit_storage();

        $total_space_required = 0;
        // ตรวจสอบว่ามีข้อมูลรูปภาพเพิ่มเติมหรือไม่
        if (isset($_FILES['news_img_img'])) {
            foreach ($_FILES['news_img_img']['name'] as $index => $name) {
                if (isset($_FILES['news_img_img']['size'][$index])) {
                    $total_space_required += $_FILES['news_img_img']['size'][$index];
                }
            }
        }

        // ตรวจสอบว่ามีข้อมูลไฟล์ PDF หรือไม่
        if (isset($_FILES['news_pdf_pdf'])) {
            foreach ($_FILES['news_pdf_pdf']['name'] as $index => $name) {
                if (isset($_FILES['news_pdf_pdf']['size'][$index])) {
                    $total_space_required += $_FILES['news_pdf_pdf']['size'][$index];
                }
            }
        }

        // ตรวจสอบว่ามีข้อมูลไฟล์ doc หรือไม่
        if (isset($_FILES['news_file_doc'])) {
            foreach ($_FILES['news_file_doc']['name'] as $index => $name) {
                if (isset($_FILES['news_file_doc']['size'][$index])) {
                    $total_space_required += $_FILES['news_file_doc']['size'][$index];
                }
            }
        }

        // เช็คค่าว่าง
        if ($used_space + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('news_backend/adding');
            return;
        }

        $imgs_data = array();

        // ตรวจสอบว่ามีการอัปโหลดรูปภาพเพิ่มเติมหรือไม่
        if (!empty($_FILES['news_img_img']['name'][0])) {
            foreach ($_FILES['news_img_img']['name'] as $index => $name) {
                $_FILES['news_img_img_multiple']['name'] = $name;
                $_FILES['news_img_img_multiple']['type'] = $_FILES['news_img_img']['type'][$index];
                $_FILES['news_img_img_multiple']['tmp_name'] = $_FILES['news_img_img']['tmp_name'][$index];
                $_FILES['news_img_img_multiple']['error'] = $_FILES['news_img_img']['error'][$index];
                $_FILES['news_img_img_multiple']['size'] = $_FILES['news_img_img']['size'][$index];

                if ($this->img_upload->do_upload('news_img_img_multiple')) {
                    $upload_data = $this->img_upload->data();
                    $imgs_data[] = array(
                        'news_img_ref_id' => $news_id,
                        'news_img_img' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_news_img', $imgs_data);
        }

        $pdf_data = array();

        // ตรวจสอบว่ามีการอัปโหลดไฟล์PDFเพิ่มเติมหรือไม่
        if (!empty($_FILES['news_pdf_pdf']['name'][0])) {
            foreach ($_FILES['news_pdf_pdf']['name'] as $index => $name) {
                $_FILES['news_pdf_pdf_multiple']['name'] = $name;
                $_FILES['news_pdf_pdf_multiple']['type'] = $_FILES['news_pdf_pdf']['type'][$index];
                $_FILES['news_pdf_pdf_multiple']['tmp_name'] = $_FILES['news_pdf_pdf']['tmp_name'][$index];
                $_FILES['news_pdf_pdf_multiple']['error'] = $_FILES['news_pdf_pdf']['error'][$index];
                $_FILES['news_pdf_pdf_multiple']['size'] = $_FILES['news_pdf_pdf']['size'][$index];

                if ($this->pdf_upload->do_upload('news_pdf_pdf_multiple')) {
                    $upload_data = $this->pdf_upload->data();
                    $pdf_data[] = array(
                        'news_pdf_ref_id' => $news_id,
                        'news_pdf_pdf' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_news_pdf', $pdf_data);
        }

        $doc_data = array();

        // ตรวจสอบว่ามีการอัปโหลดไฟล์Docเพิ่มเติมหรือไม่
        if (!empty($_FILES['news_file_doc']['name'][0])) {
            foreach ($_FILES['news_file_doc']['name'] as $index => $name) {
                $_FILES['news_file_doc_multiple']['name'] = $name;
                $_FILES['news_file_doc_multiple']['type'] = $_FILES['news_file_doc']['type'][$index];
                $_FILES['news_file_doc_multiple']['tmp_name'] = $_FILES['news_file_doc']['tmp_name'][$index];
                $_FILES['news_file_doc_multiple']['error'] = $_FILES['news_file_doc']['error'][$index];
                $_FILES['news_file_doc_multiple']['size'] = $_FILES['news_file_doc']['size'][$index];

                if ($this->doc_upload->do_upload('news_file_doc_multiple')) {
                    $upload_data = $this->doc_upload->data();
                    $doc_data[] = array(
                        'news_file_ref_id' => $news_id,
                        'news_file_doc' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_news_file', $doc_data);
        }
        $this->space_model->update_server_current();
        $this->session->set_flashdata('save_success', TRUE);
    }

    public function list_all()
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->group_by('tbl_news.news_id');
        $this->db->order_by('tbl_news.news_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function list_all_pdf($news_id)
    {
        $this->db->select('news_pdf_pdf');
        $this->db->from('tbl_news_pdf');
        $this->db->where('news_pdf_ref_id', $news_id);
        return $this->db->get()->result();
    }
    public function list_all_doc($news_id)
    {
        $this->db->select('news_file_doc');
        $this->db->from('tbl_news_file');
        $this->db->where('news_file_ref_id', $news_id);
        return $this->db->get()->result();
    }

    //show form edit
    public function read($news_id)
    {
        $this->db->where('news_id', $news_id);
        $query = $this->db->get('tbl_news');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function read_pdf($news_id)
    {
        $this->db->where('news_pdf_ref_id', $news_id);
        $this->db->order_by('news_pdf_id', 'DESC');
        $query = $this->db->get('tbl_news_pdf');
        return $query->result();
    }
    public function read_doc($news_id)
    {
        $this->db->where('news_file_ref_id', $news_id);
        $this->db->order_by('news_file_id', 'DESC');
        $query = $this->db->get('tbl_news_file');
        return $query->result();
    }

    public function read_img($news_id)
    {
        $this->db->where('news_img_ref_id', $news_id);
        $this->db->order_by('news_img_id', 'DESC');
        $query = $this->db->get('tbl_news_img');
        return $query->result();
    }

    public function del_pdf($pdf_id)
    {
        // ดึงชื่อไฟล์ PDF จากฐานข้อมูลโดยใช้ $pdf_id
        $this->db->select('news_pdf_pdf');
        $this->db->where('news_pdf_id', $pdf_id);
        $query = $this->db->get('tbl_news_pdf');
        $file_data = $query->row();

        // ลบไฟล์จากแหล่งที่เก็บไฟล์ (อาจต้องใช้ unlink หรือวิธีอื่น)
        $file_path = './docs/file/' . $file_data->news_pdf_pdf;
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        // ลบข้อมูลของไฟล์จากฐานข้อมูล
        $this->db->where('news_pdf_id', $pdf_id);
        $this->db->delete('tbl_news_pdf');
        $this->space_model->update_server_current();
        $this->session->set_flashdata('del_success', TRUE);
    }
    
    public function del_doc($doc_id)
    {
        // ดึงชื่อไฟล์ PDF จากฐานข้อมูลโดยใช้ $doc_id
        $this->db->select('news_file_doc');
        $this->db->where('news_file_id', $doc_id);
        $query = $this->db->get('tbl_news_file');
        $file_data = $query->row();

        // ลบไฟล์จากแหล่งที่เก็บไฟล์ (อาจต้องใช้ unlink หรือวิธีอื่น)
        $file_path = './docs/file/' . $file_data->news_file_doc;
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        // ลบข้อมูลของไฟล์จากฐานข้อมูล
        $this->db->where('news_file_id', $doc_id);
        $this->db->delete('tbl_news_file');
        $this->space_model->update_server_current();
        $this->session->set_flashdata('del_success', TRUE);
    }

    public function del_img($file_id)
    {
        // ดึงชื่อไฟล์ PDF จากฐานข้อมูลโดยใช้ $file_id
        $this->db->select('news_img_img');
        $this->db->where('news_img_id', $file_id);
        $query = $this->db->get('tbl_news_img');
        $file_data = $query->row();

        // ลบไฟล์จากแหล่งที่เก็บไฟล์ (อาจต้องใช้ unlink หรือวิธีอื่น)
        $file_path = './docs/img/' . $file_data->news_img_img;
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        // ลบข้อมูลของไฟล์จากฐานข้อมูล
        $this->db->where('news_img_id', $file_id);
        $this->db->delete('tbl_news_img');
        $this->space_model->update_server_current();
        $this->session->set_flashdata('del_success', TRUE);
    }


    public function edit($news_id)
    {
        // Update news information
        $data = array(
            'news_name' => $this->input->post('news_name'),
            'news_detail' => $this->input->post('news_detail'),
            'news_date' => $this->input->post('news_date'),
            'news_link' => $this->input->post('news_link'),
            'news_by' => $this->session->userdata('m_fname'), // เพิ่มชื่อคนที่แก้ไขข้อมูล
        );

        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $data);

        // หาพื้นที่ว่าง และอัพโหลดlimit จากฐานข้อมูล
        $used_space = $this->space_model->get_used_space();
        $upload_limit = $this->space_model->get_limit_storage();

        $total_space_required = 0;
        // ตรวจสอบว่ามีข้อมูลรูปภาพเพิ่มเติมหรือไม่
        if (isset($_FILES['news_img_img'])) {
            foreach ($_FILES['news_img_img']['name'] as $index => $name) {
                if (isset($_FILES['news_img_img']['size'][$index])) {
                    $total_space_required += $_FILES['news_img_img']['size'][$index];
                }
            }
        }

        // ตรวจสอบว่ามีข้อมูลไฟล์ PDF หรือไม่
        if (isset($_FILES['news_pdf_pdf'])) {
            foreach ($_FILES['news_pdf_pdf']['name'] as $index => $name) {
                if (isset($_FILES['news_pdf_pdf']['size'][$index])) {
                    $total_space_required += $_FILES['news_pdf_pdf']['size'][$index];
                }
            }
        }

        // ตรวจสอบว่ามีข้อมูลไฟล์ doc หรือไม่
        if (isset($_FILES['news_file_doc'])) {
            foreach ($_FILES['news_file_doc']['name'] as $index => $name) {
                if (isset($_FILES['news_file_doc']['size'][$index])) {
                    $total_space_required += $_FILES['news_file_doc']['size'][$index];
                }
            }
        }

        // เช็คค่าว่าง
        if ($used_space + ($total_space_required / (1024 * 1024 * 1024)) >= $upload_limit) {
            $this->session->set_flashdata('save_error', TRUE);
            redirect('news_backend/adding');
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
        $img_main = $this->img_upload->do_upload('news_img');

        // ตรวจสอบว่ามีการอัปโหลดรูปภาพหรือไม่
        if (!empty($img_main)) {
            $this->db->trans_start(); // เริ่ม Transaction

            // ดึงข้อมูลรูปเก่า
            $old_document = $this->db->get_where('tbl_news', array('news_id' => $news_id))->row();

            // ตรวจสอบว่ามีไฟล์เก่าหรือไม่
            if ($old_document && $old_document->news_img) {
                $old_file_path = './docs/img/' . $old_document->news_img;

                if (file_exists($old_file_path)) {
                    unlink($old_file_path); // ลบไฟล์เก่า
                }
            }

            // ถ้ามีการอัปโหลดรูปภาพใหม่
            $img_data['news_img'] = $this->img_upload->data('file_name');
            $this->db->where('news_id', $news_id);
            $this->db->update('tbl_news', $img_data);

            $this->db->trans_complete(); // สิ้นสุด Transaction
        }

        $imgs_data = array();

        // ตรวจสอบว่ามีการอัปโหลดรูปภาพเพิ่มเติมหรือไม่
        if (!empty($_FILES['news_img_img']['name'][0])) {

            foreach ($_FILES['news_img_img']['name'] as $index => $name) {
                $_FILES['news_img_img_multiple']['name'] = $name;
                $_FILES['news_img_img_multiple']['type'] = $_FILES['news_img_img']['type'][$index];
                $_FILES['news_img_img_multiple']['tmp_name'] = $_FILES['news_img_img']['tmp_name'][$index];
                $_FILES['news_img_img_multiple']['error'] = $_FILES['news_img_img']['error'][$index];
                $_FILES['news_img_img_multiple']['size'] = $_FILES['news_img_img']['size'][$index];

                if ($this->img_upload->do_upload('news_img_img_multiple')) {
                    $upload_data = $this->img_upload->data();
                    $imgs_data[] = array(
                        'news_img_ref_id' => $news_id,
                        'news_img_img' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_news_img', $imgs_data);
        }

        $pdf_data = array();

        // ตรวจสอบว่ามีการอัปโหลด pdf เพิ่มเติมหรือไม่
        if (!empty($_FILES['news_pdf_pdf']['name'][0])) {
            foreach ($_FILES['news_pdf_pdf']['name'] as $index => $name) {
                $_FILES['news_pdf_pdf_multiple']['name'] = $name;
                $_FILES['news_pdf_pdf_multiple']['type'] = $_FILES['news_pdf_pdf']['type'][$index];
                $_FILES['news_pdf_pdf_multiple']['tmp_name'] = $_FILES['news_pdf_pdf']['tmp_name'][$index];
                $_FILES['news_pdf_pdf_multiple']['error'] = $_FILES['news_pdf_pdf']['error'][$index];
                $_FILES['news_pdf_pdf_multiple']['size'] = $_FILES['news_pdf_pdf']['size'][$index];

                if ($this->pdf_upload->do_upload('news_pdf_pdf_multiple')) {
                    $upload_data = $this->pdf_upload->data();
                    $pdf_data[] = array(
                        'news_pdf_ref_id' => $news_id,
                        'news_pdf_pdf' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_news_pdf', $pdf_data);
        }

        $doc_data = array();

        // ตรวจสอบว่ามีการอัปโหลด doc เพิ่มเติมหรือไม่
        if (!empty($_FILES['news_file_doc']['name'][0])) {
            foreach ($_FILES['news_file_doc']['name'] as $index => $name) {
                $_FILES['news_file_doc_multiple']['name'] = $name;
                $_FILES['news_file_doc_multiple']['type'] = $_FILES['news_file_doc']['type'][$index];
                $_FILES['news_file_doc_multiple']['tmp_name'] = $_FILES['news_file_doc']['tmp_name'][$index];
                $_FILES['news_file_doc_multiple']['error'] = $_FILES['news_file_doc']['error'][$index];
                $_FILES['news_file_doc_multiple']['size'] = $_FILES['news_file_doc']['size'][$index];

                if ($this->doc_upload->do_upload('news_file_doc_multiple')) {
                    $upload_data = $this->doc_upload->data();
                    $doc_data[] = array(
                        'news_file_ref_id' => $news_id,
                        'news_file_doc' => $upload_data['file_name']
                    );
                }
            }
            $this->db->insert_batch('tbl_news_file', $doc_data);
        }
        $this->space_model->update_server_current();
        $this->session->set_flashdata('save_success', TRUE);
    }

    public function del_news($news_id)
    {
        $old_document = $this->db->get_where('tbl_news', array('news_id' => $news_id))->row();

        $old_file_path = './docs/img/' . $old_document->news_img;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }

        $this->db->delete('tbl_news', array('news_id' => $news_id));
        $this->space_model->update_server_current();
    }

    public function del_news_pdf($news_id)
    {
        // ดึงข้อมูลรายการ pdf ก่อน
        $files = $this->db->get_where('tbl_news_pdf', array('news_pdf_ref_id' => $news_id))->result();

        // ลบ pdf จากตาราง tbl_news_pdf
        $this->db->where('news_pdf_ref_id', $news_id);
        $this->db->delete('tbl_news_pdf');

        // ลบไฟล์ pdf ที่เกี่ยวข้อง
        foreach ($files as $files) {
            $file_path = './docs/file/' . $files->news_pdf_pdf;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    public function del_news_doc($news_id)
    {
        // ดึงข้อมูลรายการ doc ก่อน
        $files = $this->db->get_where('tbl_news_file', array('news_file_ref_id' => $news_id))->result();

        // ลบ doc จากตาราง tbl_news_file
        $this->db->where('news_file_ref_id', $news_id);
        $this->db->delete('tbl_news_file');

        // ลบไฟล์ doc ที่เกี่ยวข้อง
        foreach ($files as $files) {
            $file_path = './docs/file/' . $files->news_file_doc;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    public function del_news_img($news_id)
    {
        // ดึงข้อมูลรายการรูปภาพก่อน
        $files = $this->db->get_where('tbl_news_img', array('news_img_ref_id' => $news_id))->result();

        // ลบรูปภาพจากตาราง tbl_news_file
        $this->db->where('news_img_ref_id', $news_id);
        $this->db->delete('tbl_news_img');

        // ลบไฟล์รูปภาพที่เกี่ยวข้อง
        foreach ($files as $files) {
            $file_path = './docs/img/' . $files->news_img_img;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    public function update_news_status()
    {
        // ตรวจสอบว่ามีการส่งข้อมูล POST มาหรือไม่
        if ($this->input->post()) {
            $newsId = $this->input->post('news_id'); // รับค่า news_id
            $newStatus = $this->input->post('new_status'); // รับค่าใหม่จาก switch checkbox

            // ทำการอัพเดตค่าในตาราง tbl_news ในฐานข้อมูลของคุณ
            $data = array(
                'news_status' => $newStatus
            );
            $this->db->where('news_id', $newsId); // ระบุ news_id ของแถวที่ต้องการอัพเดต
            $this->db->update('tbl_news', $data);

            // ส่งการตอบกลับ (response) กลับไปยังเว็บไซต์หรือแอพพลิเคชันของคุณ
            // โดยเช่นปกติคุณอาจส่ง JSON response กลับมาเพื่ออัพเดตหน้าเว็บ
            $response = array('status' => 'success', 'message' => 'อัพเดตสถานะเรียบร้อย');
            echo json_encode($response);
        } else {
            // ถ้าไม่มีข้อมูล POST ส่งมา ให้รีเดอร์เปรียบเสมอ
            show_404();
        }
    }

    public function news_frontend()
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('tbl_news.news_status', 'show');
        $this->db->limit(8);
        $this->db->order_by('tbl_news.news_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function news_frontend_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('tbl_news.news_status', 'show');
        $this->db->order_by('tbl_news.news_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function increment_view($news_id)
    {
        $this->db->where('news_id', $news_id);
        $this->db->set('news_view', 'news_view + 1', false); // บวกค่า news_view ทีละ 1
        $this->db->update('tbl_news');
    }
    // ใน news_model
    public function increment_download_news($news_file_id)
    {
        $this->db->where('news_file_id', $news_file_id);
        $this->db->set('news_file_download', 'news_file_download + 1', false); // บวกค่า news_download ทีละ 1
        $this->db->update('tbl_news_file');
    }
}
