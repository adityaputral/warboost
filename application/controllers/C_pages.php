<?php
class C_pages extends CI_Controller {
	public function __construct(){
		session_start();
		parent::__construct();
	}
      
	public function funcIndex($sPage){
		$this->load->model('booster');
		$this->load->model('transaksi');

		$aData['listBooster'] = $this->booster->funcGetListBooster();

		$this->load->view('templates_user/V_header');
		$this->load->view('pages_user/V_games_'.$sPage, $aData);
		$this->load->view('templates_user/V_footer');
	}

}?>