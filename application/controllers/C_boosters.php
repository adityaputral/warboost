<?php

class C_boosters extends CI_Controller {
	
	public function __construct(){
		// session_start();
		parent::__construct();
	}

	public function index(){
				$this->load->model('booster');
				$this->load->model('cart');

		$aCart['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));
        
		$aData['listBooster'] = $this->booster->funcGetListBooster();

		$this->session->set_userdata('referred_from', current_url());

		$this->load->view('templates_user/V_header', $aCart);
		$this->load->view('pages_user/V_boosters', $aData);
		$this->load->view('templates_user/V_footer');
    }
}