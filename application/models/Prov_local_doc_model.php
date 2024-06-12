<?php
class Prov_local_doc_model extends CI_Model
{

    private $remote_db;

    public function __construct()
    {
        parent::__construct();

        // ข้อมูลการเชื่อมต่อฐานข้อมูล
        $this->remote_db = new mysqli(
            "103.80.48.81",  // เซิร์ฟเวอร์
            "asadmin",        // ชื่อผู้ใช้
            "ASsystem@458",  // รหัสผ่าน
            "db_prov_local_doc" // ชื่อฐานข้อมูล
        );

        // ตรวจสอบการเชื่อมต่อ
        if ($this->remote_db->connect_error) {
            die("Connection failed: " . $this->remote_db->connect_error);
        }
    }

    // ฟังก์ชันดึงข้อมูล ทั้งหมด
    public function get_local_docs_all()
    {
        $data = array();

        // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
        $sql = "SELECT * FROM tbl_pnb_local_doc ORDER BY id DESC";
        $result = $this->remote_db->query($sql);

        // ตรวจสอบว่ามีข้อมูลที่ดึงมาได้หรือไม่
        if ($result->num_rows > 0) {
            // เก็บผลลัพธ์ลงใน array
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // ฟังก์ชันดึงข้อมูล หน้าแรก
    public function get_local_docs()
    {
        $data = array();

        // สร้างคำสั่ง SQL เพื่อดึงข้อมูล 6 รายการล่าสุดจากตาราง tbl_pnb_local_doc เรียงตามคอลัมน์ id จากมากไปน้อย
        $sql = "SELECT * FROM tbl_pnb_local_doc ORDER BY id DESC LIMIT 6";
        $result = $this->remote_db->query($sql);

        // ตรวจสอบว่ามีข้อมูลที่ดึงมาได้หรือไม่
        if ($result->num_rows > 0) {
            // เก็บผลลัพธ์ลงใน array
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }


    public function __destruct()
    {
        // ปิดการเชื่อมต่อเมื่อไม่ใช้งานแล้ว
        $this->remote_db->close();
    }
}
