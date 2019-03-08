<?php

class C_home extends CI_Controller {
	
	public function __construct(){
		session_start();
		parent::__construct();
	}
	public function comingsoon(){
		$this->load->view('Soon');
	}
	public function index(){
		$this->load->view('templates_user/V_header');
		$this->load->view('pages_user/V_home');
		$this->load->view('templates_user/V_footer');
    }
}