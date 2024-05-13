<?php
class Intra_egp_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('space_model');
    }

    // ปี 2567 **************************************************
    // จำนวนโครงการทั้งหมด
    public function count_project_id_y2567()
    {
        return $this->db->count_all_results('tbl_bp_report_y2567');
    }
    // งบประมาณโครงการต่อปี
    public function sum_project_money_y2567()
    {
        // สร้างคำสั่ง SQL สำหรับ SUM() โดยไม่ใช้ REPLACE()
        $this->db->select_sum('project_money');

        // ดึงค่าผลรวมจากตาราง tbl_bp_report_y2567
        $query = $this->db->get('tbl_bp_report_y2567');

        // คืนค่าผลรวม
        return $query->row()->project_money;
    }
    public function sum_project_money_without_comma_y2567()
    {
        // สร้างคำสั่ง SQL สำหรับ REPLACE() เพื่อลบเครื่องหมายคอมม่า
        $sql = "SELECT SUM(CAST(REPLACE(project_money, ',', '') AS DECIMAL(10,2))) AS sum_money FROM tbl_bp_report_y2567";

        // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
        $query = $this->db->query($sql);

        // คืนค่าผลรวม
        return $query->row()->sum_money;
    }
    // ราคากลาง
    public function sum_price_build_money_y2567()
    {
        // สร้างคำสั่ง SQL สำหรับ SUM() โดยไม่ใช้ REPLACE()
        $this->db->select_sum('price_build');

        // ดึงค่าผลรวมจากตาราง tbl_bp_report_y2567
        $query = $this->db->get('tbl_bp_report_y2567');

        // คืนค่าผลรวม
        return $query->row()->sum_price_build;
    }
    public function sum_price_build_money_without_comma_y2567()
    {
        // สร้างคำสั่ง SQL สำหรับ REPLACE() เพื่อลบเครื่องหมายคอมม่า
        $sql = "SELECT SUM(CAST(REPLACE(price_build, ',', '') AS DECIMAL(10,2))) AS sum_money FROM tbl_bp_report_y2567";

        // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
        $query = $this->db->query($sql);

        // คืนค่าผลรวม
        return $query->row()->sum_money;
    }

    // ปี 2566 **************************************************
    // จำนวนโครงการทั้งหมด
    public function count_project_id_y2566()
    {
        return $this->db->count_all_results('tbl_bp_report_y2566');
    }
    // งบประมาณโครงการต่อปี
    public function sum_project_money_y2566()
    {
        // สร้างคำสั่ง SQL สำหรับ SUM() โดยไม่ใช้ REPLACE()
        $this->db->select_sum('project_money');

        // ดึงค่าผลรวมจากตาราง tbl_bp_report_y2566
        $query = $this->db->get('tbl_bp_report_y2566');

        // คืนค่าผลรวม
        return $query->row()->project_money;
    }

    public function sum_project_money_without_comma_y2566()
    {
        // สร้างคำสั่ง SQL สำหรับ REPLACE() เพื่อลบเครื่องหมายคอมม่า
        $sql = "SELECT SUM(CAST(REPLACE(project_money, ',', '') AS DECIMAL(10,2))) AS sum_money FROM tbl_bp_report_y2566";

        // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
        $query = $this->db->query($sql);

        // คืนค่าผลรวม
        return $query->row()->sum_money;
    }
        // ราคากลาง
        public function sum_price_build_money_y2566()
        {
            // สร้างคำสั่ง SQL สำหรับ SUM() โดยไม่ใช้ REPLACE()
            $this->db->select_sum('price_build');
    
            // ดึงค่าผลรวมจากตาราง tbl_bp_report_y2566
            $query = $this->db->get('tbl_bp_report_y2566');
    
            // คืนค่าผลรวม
            return $query->row()->sum_price_build;
        }
        public function sum_price_build_money_without_comma_y2566()
        {
            // สร้างคำสั่ง SQL สำหรับ REPLACE() เพื่อลบเครื่องหมายคอมม่า
            $sql = "SELECT SUM(CAST(REPLACE(price_build, ',', '') AS DECIMAL(10,2))) AS sum_money FROM tbl_bp_report_y2566";
    
            // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
            $query = $this->db->query($sql);
    
            // คืนค่าผลรวม
            return $query->row()->sum_money;
        }
    // ปี 2565 **************************************************
    // จำนวนโครงการทั้งหมด
    public function count_project_id_y2565()
    {
        return $this->db->count_all_results('tbl_bp_report_y2565');
    }
    // งบประมาณโครงการต่อปี
    public function sum_project_money_y2565()
    {
        // สร้างคำสั่ง SQL สำหรับ SUM() โดยไม่ใช้ REPLACE()
        $this->db->select_sum('project_money');

        // ดึงค่าผลรวมจากตาราง tbl_bp_report_y2565
        $query = $this->db->get('tbl_bp_report_y2565');

        // คืนค่าผลรวม
        return $query->row()->project_money;
    }
    public function sum_project_money_without_comma_y2565()
    {
        // สร้างคำสั่ง SQL สำหรับ REPLACE() เพื่อลบเครื่องหมายคอมม่า
        $sql = "SELECT SUM(CAST(REPLACE(project_money, ',', '') AS DECIMAL(10,2))) AS sum_money FROM tbl_bp_report_y2565";

        // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
        $query = $this->db->query($sql);

        // คืนค่าผลรวม
        return $query->row()->sum_money;
    }
        // ราคากลาง
    public function sum_price_build_money_y2565()
    {
        // สร้างคำสั่ง SQL สำหรับ SUM() โดยไม่ใช้ REPLACE()
        $this->db->select_sum('price_build');

        // ดึงค่าผลรวมจากตาราง tbl_bp_report_y2565
        $query = $this->db->get('tbl_bp_report_y2565');

        // คืนค่าผลรวม
        return $query->row()->sum_price_build;
    }
    public function sum_price_build_money_without_comma_y2565()
    {
        // สร้างคำสั่ง SQL สำหรับ REPLACE() เพื่อลบเครื่องหมายคอมม่า
        $sql = "SELECT SUM(CAST(REPLACE(price_build, ',', '') AS DECIMAL(10,2))) AS sum_money FROM tbl_bp_report_y2565";

        // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
        $query = $this->db->query($sql);

        // คืนค่าผลรวม
        return $query->row()->sum_money;
    }
}
