<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
        $this->load->helper('date'); 
		date_default_timezone_set('Asia/Kolkata');	
		// $this->load->model('');
		// $this->load->library('');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function aboutus()
	{
		$this->load->view('about');
	}
}
