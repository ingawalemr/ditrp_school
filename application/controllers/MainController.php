<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.smtp.php';

class MainController extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
        $this->load->helper('date'); 
		date_default_timezone_set('Asia/Kolkata');	
		$this->load->model('MainModel');
		// $this->load->library('');
	}
	
	public function index()
	{
		$data['banner'] = $this->MainModel->getAllData_1($tbl='home_screen_banner');
		//print_r($data);
		$this->load->view('index', $data);
	}

	public function about_us()
	{
		$where='(id=1)';
		$data['about'] = $this->MainModel->getallData($tbl='about_us',$where);

		$data['testimonial'] = $this->MainModel->getAllData_1($tbl='testimonial');
	 	//echo "<pre>";print_r($data['testimonial']);echo "</pre>";	die;
		$this->load->view('about', $data);
	}

	public function request_quote()
	{
		$name = $this->input->post('name');
		$email_id = $this->input->post('email_id');
		$course = $this->input->post('course');
		$mobile = $this->input->post('mobile');
		$message = $this->input->post('message');
		$subject = "Contact Us - 'Request A Quote' ";
		

			$mail= "ingawalemr12@gmail.com";

			$email = new PHPMailer();
	        $email->Host = 'appziatech.com';
	        $email->SMTPAuth = true;  
	        $email->Username = 'ingawalemr12@gmail.com';
	        $email->Password = 'Mysonissiddhesh@2015';
	        $email->SMTPSecure = 'tls';
	        $email->Port = '465';
	        $email->setfrom('ingawalemr12@gmail.com', 'DONOTREPLY'); // from
	        $email->addAddress($mail); // to 
			$email->IsHTML(true);// HTML email 
			$email->Subject   = $subject;
			$email->Body      = $message;

			if ($email->send())
	        {
	        	$this->session->set_flashdata('update', '<span style="color:green">Request has been sent to admin.</span>');
	        	$arr=array(
	        					'name' => $name,
	        					'email' => $email_id,
	        					'subject' => $subject,
	        					'message' => $message,
	        					'course' => $course,
	        					'mobile' => $mobile,
	        					'send_date' => date('Y-m-d'),
	        				);
	        	$this->MainModel->insertData($tbl='request_quote', $arr);
	            redirect(base_url().'about_us');

	   //      	$arr=array();
	   //      	$arr['subject'] = $subject;
	   //      	$arr['name'] = $name;
	   //      	$arr['email'] = $email_id;
	   //      	$arr['course'] = $course;
				// $arr['mobile'] = $mobile;
				// $arr['send_date'] = date('Y-m-d');
				// $arr['message'] = $message;
			}
	        else
	        {
	        	$this->session->set_flashdata('update', '<span style="color:red">Error in Request sending. Please try again...</span>');
	        	redirect(base_url().'about_us');  
	        }
	   
	}

	

	public function gallary()
	{
		$this->load->view('gallary');
	}

	public function facility()
	{
		$data['facility'] = $this->MainModel->getAllData_1($tbl='facilities');
		//print_r($data['facility']);
		$this->load->view('facility', $data);
	}

	public function admission_enquiry()
	{
		$this->load->view('admission_enquiry');
	}

	public function admission_enquiry_recieve()
	{
		$admission_Class = $this->input->post('admission_Class');
		$admission_Year = $this->input->post('admission_Year');
		$first_name = $this->input->post('first_name');
		$middle_name = $this->input->post('middle_name');
		$last_name = $this->input->post('last_name');
		$dob = $this->input->post('dob');
		$age = $this->input->post('age');
		$gender = $this->input->post('gender');
		$accept_TC = $this->input->post('accept_TC');

		$arr = array(
						'admission_Class' => $admission_Class ,
						'admission_Year' => $admission_Year ,
						'first_name' => $first_name ,
						'middle_name' => $middle_name ,
						'last_name' => $last_name ,
						'dob' => $dob ,
						'age' => $age ,
						'gender' => $gender ,
						'accept_TC' => $accept_TC ,
					);
		
		$this->MainModel->insertData($tbl='admission_inquiry', $arr);
		$this->session->set_flashdata('success', '<span style="color:green">Request has been sent to admin, PLease wait for response</span>');
	    redirect(base_url().'admission_enquiry');  
	}

	public function admission_policy()
	{
		$this->load->view('admission_policy');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function contact_us()
	{
		$name = $this->input->post('name');
		$email_id = $this->input->post('email_id');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		// echo $name;echo "<br>";echo $email_id;echo "<br>";echo $subject;echo "<br>";die;
			
			$mail= "ingawalemr12@gmail.com"; // admin email , here

			$email = new PHPMailer();
	        $email->Host = 'appziatech.com';
	        $email->SMTPAuth = true;  
	        $email->Username = 'ingawalemr12@gmail.com';
	        $email->Password = 'Mysonissiddhesh@2015';
	        $email->SMTPSecure = 'tls';
	        $email->Port = '465';
	        $email->setfrom('ingawalemr12@gmail.com', 'DONOTREPLY'); // from
	        $email->addAddress($mail); // to 
			$email->IsHTML(true);// HTML email 
			$email->Subject   = $subject;
			$email->Body      = $message;

			if ($email->send())
	        {
	        	$this->session->set_flashdata('update', '<span style="color:green">Request has been sent to admin.</span>');
	        	$arr=array(
	        					'name' => $name,
	        					'email_id' => $email_id,
	        					'subject' => $subject,
	        					'message' => $message,
	        					'send_date' => date('Y-m-d'),
	        				);
	        
				$this->MainModel->insertData($tbl='contact_us', $arr);
				redirect(base_url().'contact'); 
	        }
	        else
	        {
	        	$this->session->set_flashdata('update', '<span style="color:red">Error in Request sending. Please try again...</span>');
	        	redirect(base_url().'contact');  
	        }
	   
	}
 
} // end MainController()
?>