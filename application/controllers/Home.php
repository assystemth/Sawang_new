<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('important_day_model');
		$this->load->model('HotNews_model');
		$this->load->model('Weather_report_model');
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
		$this->load->model('prov_local_doc_model');
	}

	public function main()
	{
		$data['qImportant_day'] = $this->important_day_model->important_day_frontend();
		$data['qControl_important_day'] = $this->important_day_model->control_important_day_frontend();
		$this->load->view('frontend/main', $data);
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

		// เรียกใช้ฟังก์ชันเพื่อโหลดข้อมูล RSS
		$rssData = $this->loadNewsDlaData();

		// ตรวจสอบว่าข้อมูล RSS ใช้งานได้หรือไม่
		if ($rssData !== FALSE) {
			// รวมข้อมูล RSS กับข้อมูลอื่น ๆ
			$data['rssData'] = $rssData;
		} else {
			// ถ้า RSS ใช้งานไม่ได้ ไม่ต้องส่งข้อมูลไปที่หน้า home
			$data['rssData'] = []; // หรือสามารถไม่กำหนดค่านี้เลยตามความเหมาะสม
		}

		// สถ.จ.
		// $data['prov_local_doc'] = $this->prov_local_doc_model->get_local_docs();

		// echo '<pre>';
		// print_r($data['rssData']);
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
		$data['qWeather'] = $this->Weather_report_model->weather_reports_frontend();
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


		$countExcellent = $this->like_model->countLikes('ดีมาก');
		$countGood = $this->like_model->countLikes('ดี');
		$countAverage = $this->like_model->countLikes('ปานกลาง');
		$countOkay = $this->like_model->countLikes('พอใช้');

		$totalCount = $countExcellent + $countGood + $countAverage + $countOkay;

		$data['percentExcellent'] = ($totalCount > 0) ? ($countExcellent / $totalCount) * 100 : 0;
		$data['percentGood'] = ($totalCount > 0) ? ($countGood / $totalCount) * 100 : 0;
		$data['percentAverage'] = ($totalCount > 0) ? ($countAverage / $totalCount) * 100 : 0;
		$data['percentOkay'] = ($totalCount > 0) ? ($countOkay / $totalCount) * 100 : 0;

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

	private function loadNewsDlaData()
	{
		// Load the XML data from the URL
		$xml = @simplexml_load_file("https://www.dla.go.th/servlet/RssServlet");

		// Initialize row color flag
		$row_color = '#FFFFFF'; // Start with white

		// Array to store document data
		$documents = [];

		// Check if XML data is loaded successfully
		if ($xml !== FALSE) {
			// Loop through each DOCUMENT tag
			foreach ($xml->DOCUMENT as $document) {
				// Alternate row color
				$row_color = ($row_color == '#FFFFFF') ? '#73e3f9' : '#FFFFFF';

				// Extract data from XML
				$date = (string) $document->DOCUMENT_DATE;
				$organization = (string) $document->ORG;
				$doc_number = (string) $document->DOCUMENT_NO;
				$topic = (string) $document->DOCUMENT_TOPIC;
				$upload_file1 = (string) $document->UPLOAD_FILE1;

				// Initialize topic with no hyperlink
				$topic_html = $topic;

				// Check if UPLOAD_FILE1 exists for the topic
				if (isset($document->UPLOAD_FILE1)) {
					// Get UPLOAD_FILE1 link
					$upload_file1 = (string) $document->UPLOAD_FILE1;
					// Create hyperlink for the topic
					$topic_html = '<a href="' . $upload_file1 . '">' . $topic . '</a>';
				}

				// Check if there are additional UPLOAD_FILE and UPLOAD_DESC
				for ($i = 2; $i <= 5; $i++) {
					$upload_file = (isset($document->{"UPLOAD_FILE$i"})) ? (string) $document->{"UPLOAD_FILE$i"} : '';
					$upload_desc = (isset($document->{"UPLOAD_DESC$i"})) ? (string) $document->{"UPLOAD_DESC$i"} : '';
					if (!empty($upload_file)) {
						$topic_html .= '<br><a href="' . $upload_file . '">' . $upload_desc . '</a>';
					}
				}

				// Generate data array for the view
				$documents[] = [
					'date' => $date,
					'organization' => $organization,
					'doc_number' => $doc_number,
					'topic' => $topic_html
				];
			}
		} else {
			// Handle error: XML data could not be loaded
			$documents = [];
		}

		// Sort documents by date in descending order
		usort($documents, function ($a, $b) {
			$dateA = DateTime::createFromFormat('d/m/Y', $a['date']);
			$dateB = DateTime::createFromFormat('d/m/Y', $b['date']);
			return $dateB <=> $dateA; // Descending order
		});

		// Return the array of documents
		return $documents;
	}


	public function addLike()
	{
		$data = array(
			'like_name' => $this->input->post('like_name')
		);

		$this->like_model->addLike($data);
		$this->session->set_flashdata('save_success', TRUE);
		echo '<script>window.history.back();</script>';
	}

	public function login()
	{

		$api_data1 = $this->fetch_api_data('https://www.assystem.co.th/service_api/index.php');
		if ($api_data1 !== FALSE) {
			// Merge API data with existing data
			$data['api_data1'] = $api_data1;
		} else {
			// Handle if API data is not fetched successfully
			$data['api_data1'] = []; // or any default value as needed
		}

		$this->load->view('login', $data);
	}
	private function fetch_api_data($api_url)
	{
		// Initialize cURL
		$curl = curl_init();

		// Set cURL options
		curl_setopt($curl, CURLOPT_URL, $api_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification (for testing purposes only)

		// Execute cURL request
		$api_data = curl_exec($curl);

		// Check for errors
		if ($api_data === false) {
			$error_message = curl_error($curl);
			echo "Error: $error_message";
		} else {
			// Decode JSON data
			$data = json_decode($api_data, true);
			return $data;
		}

		// Close cURL session
		curl_close($curl);
	}
}
