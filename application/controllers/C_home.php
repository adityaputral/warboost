<?php

class C_home extends CI_Controller {
	
	public function __construct(){
		session_start();
		parent::__construct();
	}

	public function index(){
		$this->load->model('game');
		$this->load->model('booster');

		$aData['listGame'] = $this->game->funcGetListGame();
		$aData['listBooster'] = $this->booster->funcGetListBooster();

		$this->load->view('templates_user/V_header');
		$this->load->view('pages_user/V_home', $aData);
		$this->load->view('templates_user/V_footer');
    }
}