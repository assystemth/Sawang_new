<?php
class Weather_report_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function save_weather_report($data) {
        return $this->db->insert('tbl_weather_reports', $data);
    }

    public function clear_weather_reports() {
        return $this->db->empty_table('tbl_weather_reports');
    }
}