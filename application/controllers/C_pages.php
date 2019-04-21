<?php
class C_pages extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
      
	public function funcIndex($sPage){
		$this->load->model('booster');
		$this->load->model('transaksi');
		$this->load->model('rank');

		$aData['listBooster'] = $this->booster->funcGetListBooster();
		if($sPage === 'csgo'){
			$aData['listRank'] = $this->rank->funcGetListRank(0);
		} else if($sPage === 'rocket-league'){
			$aData['listRank'] = $this->rank->funcGetListRank(5);
		}

		$this->load->view('templates_user/V_header');
		$this->load->view('pages_user/V_games_'.$sPage, $aData);
		$this->load->view('templates_user/V_footer');
	}

}?>