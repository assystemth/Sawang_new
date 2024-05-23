<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('HotNews_model');
		$this->load->model('banner_model');
		$this->load->model('background_personnel_model');
		$this->load->model('calender_model');
		$this->load->model('activity_model');
		$this->load->model('p_rpo_model');
		$this->load->model('p_reb_model');
		$this->load->model('news_model');
		$this->load->model('order_model');
		$this->load->model('announce_model');
		$this->load->model('procurement_model');
		$this->load->model('mui_model');
		$this->load->model('guide_work_model');
		$this->load->model('loadform_model');

		$this->load->model('otop_model');
		$this->load->model('travel_model');

		$this->load->model('like_model');
		$this->load->model('log_users_model');

		$this->load->model('q_a_model');

		$this->load->model('publicize_ita_model');
	}

	public function main()
	{
		$this->load->view('frontend/main');
	}


	public function index()
	{
		// โหลดข้อมูลอื่น ๆ ก่อน
		$data = $this->loadOtherData();

		// โหลด API หลังจากโหลดข้อมูลอื่น ๆ เสร็จแล้ว
		$apiData = $this->loadApiData();

		// ตรวจสอบว่าข้อมูล API ใช้งานได้หรือไม่
		if ($apiData !== FALSE) {
			// รวมข้อมูลทั้งหมด
			$data['json_data'] = $apiData;
		} else {
			// ถ้า API ใช้งานไม่ได้ ไม่ต้องส่งข้อมูลไปที่หน้า home
			$data['json_data'] = []; // หรือสามารถไม่กำหนดค่านี้เลยตามความเหมาะสม
		}

		// // โหลดข้อมูลจาก API
		// $weatherData = $this->loadWeatherData();

		// // ตรวจสอบว่าข้อมูล API ใช้งานได้หรือไม่
		// if ($weatherData !== FALSE) {
		// 	$data['weather_data'] = $weatherData;
		// } else {
		// 	$data['weather_data'] = [];
		// }

		// echo '<pre>';
		// print_r($data['weather_data']);
		// echo '</pre>';
		// exit;

		// โหลด view
		$this->load->view('frontend_templat/header');
		$this->load->view('frontend_asset/css');
		$this->load->view('frontend_templat/navbar');
		$this->load->view('frontend/home', $data);
		$this->load->view('frontend_asset/js');
		$this->load->view('frontend_asset/php');
		$this->load->view('frontend_templat/footer');
	}


	private function loadOtherData()
	{
		// โหลดข้อมูลอื่น ๆ ที่ไม่ใช่ API
		$onlineUsersCount = $this->log_users_model->countOnlineUsers();
		$onlineUsersDay = $this->log_users_model->countUsersToday();
		$onlineUsersWeek = $this->log_users_model->countUsersThisWeek();
		$onlineUsersMonth = $this->log_users_model->countUsersThisMonth();
		$onlineUsersYear = $this->log_users_model->countUsersThisYear();
		$onlineUsersAll = $this->log_users_model->countAllUsers();

		// รวมข้อมูลทั้งหมดในรูปแบบของ array
		$data = [
			'onlineUsersCount' => $onlineUsersCount,
			'onlineUsersDay' => $onlineUsersDay,
			'onlineUsersWeek' => $onlineUsersWeek,
			'onlineUsersMonth' => $onlineUsersMonth,
			'onlineUsersYear' => $onlineUsersYear,
			'onlineUsersAll' => $onlineUsersAll,
		];

		$data['qHotnews'] = $this->HotNews_model->hotnews_frontend();
		$data['qBanner'] = $this->banner_model->banner_frontend();
		$data['qBackground_personnel'] = $this->background_personnel_model->background_personnel_frontend();
		$data['qCalender'] = $this->calender_model->calender_frontend();
		$data['qActivity'] = $this->activity_model->activity_frontend();

		$data['qP_reb'] = $this->p_reb_model->p_reb_frontend();
		$data['qP_rpo'] = $this->p_rpo_model->p_rpo_frontend();
		$data['qNews'] = $this->news_model->news_frontend();
		$data['qOrder'] = $this->order_model->order_frontend();
		$data['qAnnounce'] = $this->announce_model->announce_frontend();
		$data['qProcurement'] = $this->procurement_model->procurement_frontend();
		$data['qMui'] = $this->mui_model->mui_frontend();
		$data['qGuide_work'] = $this->guide_work_model->guide_work_frontend();
		$data['qLoadform'] = $this->loadform_model->loadform_frontend();

		$data['qTravel'] = $this->travel_model->travel_frontend();
		$data['qOtop'] = $this->otop_model->otop_frontend();
		$data['qQ_a'] = $this->q_a_model->q_a_frontend();

		$data['qPublicize_ita'] = $this->publicize_ita_model->publicize_ita_frontend();


		$data['countExcellent'] = $this->like_model->countLikes('ดีมาก');
		$data['countGood'] = $this->like_model->countLikes('ดี');
		$data['countAverage'] = $this->like_model->countLikes('ปานกลาง');
		$data['countOkay'] = $this->like_model->countLikes('พอใช้');

		return $data;
	}

	private function loadApiData()
	{
		// URL of the Open API
		$api_url = 'https://opend.data.go.th/govspending/cgdcontract?api-key=TH3JFBwJZlaXdDCpcVfSFGuoofCJ1heX&year=2566&dept_code=6450704&budget_start=0&budget_end=1000000000&offset=0&limit=500&keyword=&winner_tin=';

		// Configure options for the HTTP request
		$options = [
			'http' => [
				'method' => 'GET',
				'timeout' => 5, // Set a timeout value for the request (in seconds)
				'ignore_errors' => true, // Ignore HTTP errors to handle them manually
			],
		];

		// Create a stream context with the specified options
		$context = stream_context_create($options);

		// Fetch data from the API using file_get_contents with the specified context
		$api_data = file_get_contents($api_url, false, $context);

		// Check if data is fetched successfully
		if ($api_data !== FALSE) {
			// Decode the JSON data
			$json_data = json_decode($api_data, TRUE);

			// Check if JSON decoding is successful
			if ($json_data !== NULL) {
				return $json_data;
			}
		}

		// ในกรณีที่มีปัญหาในการโหลดหรือประมวลผลข้อมูล
		return FALSE; // แก้ไขให้ฟังก์ชันนี้คืนค่า FALSE แทน []
	}

	// private function loadWeatherData()
	// {
	// 	// URL ของ API
	// 	$api_url = 'https://www.tmd.go.th/api/xml/weather-report?stationnumber=48405';

	// 	// ตั้งค่า options สำหรับการร้องขอ HTTP
	// 	$options = [
	// 		'http' => [
	// 			'method' => 'GET',
	// 			'ignore_errors' => true, // ละเว้นข้อผิดพลาด HTTP เพื่อจัดการเอง
	// 			'timeout' => 10, // ตั้งค่า timeout เป็น 10 วินาที
	// 		],
	// 	];

	// 	// สร้าง context สำหรับการร้องขอด้วย options ที่ตั้งไว้
	// 	$context = stream_context_create($options);

	// 	// ดึงข้อมูลจาก API โดยใช้ file_get_contents พร้อม context ที่ตั้งไว้
	// 	$api_data = @file_get_contents($api_url, false, $context);

	// 	// ตรวจสอบว่าข้อมูลถูกดึงมาสำเร็จหรือไม่
	// 	if ($api_data === FALSE) {
	// 		// Log ข้อผิดพลาดหรือแคชข้อมูลเก่าเพื่อใช้ในกรณีที่การดึงข้อมูลล้มเหลว
	// 		// echo 'Failed to fetch data from API.';
	// 		return FALSE;
	// 	}

	// 	// แปลงข้อมูลจาก XML เป็น SimpleXMLElement
	// 	$xml_data = @simplexml_load_string($api_data, "SimpleXMLElement", LIBXML_NOCDATA);

	// 	// ตรวจสอบว่าการแปลง XML เป็น Object สำเร็จหรือไม่
	// 	if ($xml_data === FALSE) {
	// 		echo 'Failed to decode XML data.';
	// 		return FALSE;
	// 	}

	// 	// แปลง Object เป็น Array
	// 	$json_data = json_decode(json_encode($xml_data), TRUE);

	// 	return $json_data;
	// }

	public function addLike()
	{
		$data = array(
			'like_name' => $this->input->post('like_name')
		);

		$this->like_model->addLike($data);
		$this->session->set_flashdata('save_success', TRUE);
		redirect('home');
	}

	public function login()
	{
		$this->load->view('login');
	}
}
