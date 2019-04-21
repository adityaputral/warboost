<?php

class C_home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('game');
		$this->load->model('booster');
		$this->load->model('transaksi');

		$aData['listGame'] = $this->game->funcGetListGame();
		$aData['listBooster'] = $this->booster->funcGetListBooster();
		$aData['list5LatestTransaksi'] = $this->transaksi->funcGet5LatestTransaksi();

		$this->load->view('templates_user/V_header');
		$this->load->view('pages_user/V_home', $aData);
		$this->load->view('templates_user/V_footer');
		}
		
		public function func404(){
			$this->load->view('404');
		}
}