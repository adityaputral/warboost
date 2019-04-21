<?php

class C_boosters extends CI_Controller {
	
	public function __construct(){
		// session_start();
		parent::__construct();
	}

	public function index(){
        $this->load->model('booster');
        
		$aData['listBooster'] = $this->booster->funcGetListBooster();

		$this->load->view('templates_user/V_header');
		$this->load->view('pages_user/V_boosters', $aData);
		$this->load->view('templates_user/V_footer');
    }
}