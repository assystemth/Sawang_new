<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Weather_report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Weather_report_model');
        $this->load->helper('url'); // Load URL helper to use base_url function
    }

    public function save_xml() {
        // URL สำหรับดึงข้อมูล XML
        $xml_url = 'http://www.tmd.go.th/api/xml/weather-report?stationnumber=48405';

        // ดึงข้อมูล XML
        $xml_string = file_get_contents($xml_url);

        if ($xml_string === false) {
            echo 'ไม่สามารถดึงข้อมูล XML ได้';
            return;
        }

        // แยกข้อมูล XML
        $xml = simplexml_load_string($xml_string);

        if ($xml === false) {
            echo 'ไม่สามารถแยกข้อมูล XML ได้';
            return;
        }

        // ดึงข้อมูลที่ต้องการจาก XML
        $channel = $xml->channel;
        $item = $channel->item;

        $data = array(
            'title' => (string) $item->title,
            'pub_date' => date('Y-m-d H:i:s', strtotime((string) $item->pubDate)),
            'guid' => (string) $item->guid,
            'link' => (string) $item->link,
            'author' => (string) $item->author,
            'description' => strip_tags((string) $item->description),
            'created_at' => date('Y-m-d H:i:s')
        );

        // ลบข้อมูลเดิมออกจากฐานข้อมูล
        $this->Weather_report_model->clear_weather_reports();

        // บันทึกข้อมูลลงฐานข้อมูล
        if ($this->Weather_report_model->save_weather_report($data)) {
            echo 'บันทึกรายงานสภาพอากาศสำเร็จ!';
        } else {
            echo 'ไม่สามารถบันทึกรายงานสภาพอากาศได้';
        }
    }
}