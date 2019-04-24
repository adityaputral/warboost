<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_boostersetting extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/
	public function __construct(){
		// session_start();
		parent::__construct();
		$this->load->model('booster');
	}
	public function index()
	{
		$aData['listStatus'] = $this->booster->getListStatus();

		$this->load->helper('url');
		$this->load->view('templates_booster/V_header');
		$this->load->view('V_boostersetting',$aData);
		$this->load->view('templates_booster/V_footer');
	}

	public function changeStatus(){
		$id = $this->session->userdata('id');
		$status = $this->input->post('status');
		$this->booster->changeStatus($id,$status);
		$this->session->set_userdata('status', $status);
		redirect('booster/setting');
	}

	public function changePassword(){
		$username = $this->session->userdata('username');
		$old = $this->input->post('oldPass');
		$new = $this->input->post('newPass');
		$password_db = $this->booster->getPassword($username);
		if($old === $password_db){
			$this->booster->changePassword($username,$new);
		}
		redirect('booster/setting');
	}
}
