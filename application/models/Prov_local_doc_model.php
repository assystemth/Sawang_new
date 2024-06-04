<?php
class Prov_local_doc_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
    }

    public function list_all()
    {
        $this->db->select('*');
        $this->db->from('tbl_prov_local_doc');
        $this->db->group_by('tbl_prov_local_doc.id');
        $this->db->order_by('tbl_prov_local_doc.doc_date', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function prov_local_doc_frontend()
    {
        $this->db->select('*');
        $this->db->from('tbl_prov_local_doc');
        $this->db->where('tbl_prov_local_doc.prov_local_doc_status', 'show');
        $this->db->limit(9);
        $this->db->order_by('tbl_prov_local_doc.prov_local_doc_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function prov_local_doc_frontend_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_prov_local_doc');
        $this->db->where('tbl_prov_local_doc.prov_local_doc_status', 'show');
        $this->db->order_by('tbl_prov_local_doc.prov_local_doc_date', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function increment_view($prov_local_doc_id)
    {
        $this->db->where('prov_local_doc_id', $prov_local_doc_id);
        $this->db->set('prov_local_doc_view', 'prov_local_doc_view + 1', false); // บวกค่า prov_local_doc_view ทีละ 1
        $this->db->update('tbl_prov_local_doc');
    }
    // ใน prov_local_doc_model
    public function increment_download_prov_local_doc($prov_local_doc_file_id)
    {
        $this->db->where('prov_local_doc_file_id', $prov_local_doc_file_id);
        $this->db->set('prov_local_doc_file_download', 'prov_local_doc_file_download + 1', false); // บวกค่า prov_local_doc_download ทีละ 1
        $this->db->update('tbl_prov_local_doc_file');
    }
}
