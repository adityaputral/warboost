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
		// var_dump($aData);
		$this->load->helper('url');
		$this->load->view('templates_booster/V_header');
		$this->load->view('V_boosterorder',$aData);
		$this->load->view('templates_booster/V_footer');
	}

	public function orderDetails($id)
	{
		$aData['order_details'] = $this->booster->getOrderDetails($id);
		$aData['list_status'] = $this->booster->list_status_progress();
		// var_dump($aData);
		$this->load->helper('url');
		$this->load->view('templates_booster/V_header');
		$this->load->view('V_orderDetails',$aData);
		$this->load->view('templates_booster/V_footer');
	}

	function updateStatus(){
		$mode = $this->input->post('mode');
		$id_progress = $this->input->post('id_progress');
		$status = $this->input->post('current_status');
		// mode 0 untuk confirm, 1 untuk update, 2 untuk delete
		$this->booster->update_order($id_progress,$mode,$status);
		// var_dump($mode);
		// var_dump($id_progress);
		// var_dump($status);

		$aData['listOrder'] = $this->booster->getOrder();
		// var_dump($aData);
		$this->load->helper('url');
		$this->load->view('templates_booster/V_header');
		$this->load->view('V_boosterorder',$aData);
		$this->load->view('templates_booster/V_footer');
	}
}
