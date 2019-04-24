<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_boosterorder extends CI_Controller {

	public function __construct(){
		// session_start();
		parent::__construct();
		$this->load->model('booster');
	}

	public function index()
	{
		$aData['listOrder'] = $this->booster->getOrder();

		$this->load->helper('url');
		$this->load->view('templates_booster/V_header');
		$this->load->view('V_boosterorder',$aData);
		$this->load->view('templates_booster/V_footer');
	}

	public function orderDetails($id)
	{
		$aData['listOrder'] = $this->booster->getOrderDetails($id);

		$this->load->helper('url');
		$this->load->view('templates_booster/V_header');
		$this->load->view('V_orderDetails',$aData);
		$this->load->view('templates_booster/V_footer');
	}
}
