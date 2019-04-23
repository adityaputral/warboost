<?php

class C_home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('game');
		$this->load->model('booster');
		$this->load->model('transaksi');
		$this->load->model('cart');

		$aData['listGame'] = $this->game->funcGetListGame();
		$aData['listBooster'] = $this->booster->funcGetListBooster();
		$aData['list5LatestTransaksi'] = $this->transaksi->funcGet5LatestTransaksi();
		$aCart['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));

		// var_dump($aCart);

		$this->session->set_userdata('referred_from', current_url());

		$this->load->view('templates_user/V_header', $aCart);
		$this->load->view('pages_user/V_home', $aData);
		$this->load->view('templates_user/V_footer');
		}
		
		public function func404(){
			$this->load->view('404');
		}
}