<?php
class C_pages extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
      
	public function funcIndex($sPage){
		$this->load->model('booster');
		$this->load->model('transaksi');
		$this->load->model('rank');
		$this->load->model('cart');

		$aCart['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));

		if($sPage === 'csgo'){
			$aData['listRank'] = $this->rank->funcGetListRank(0);
			$aData['listBooster'] = $this->booster->funcGetAvailableBooster(0);
		} 
		else if($sPage === 'apex-legends'){
			$aData['listRank'] = $this->rank->funcGetListRank(1);
			$aData['listBooster'] = $this->booster->funcGetAvailableBooster(1);
		}
		else if($sPage === 'dota-2'){
			$aData['listRank'] = $this->rank->funcGetListRank(2);
			$aData['listBooster'] = $this->booster->funcGetAvailableBooster(2);
		}
		else if($sPage === 'lol'){
			$aData['listRank'] = $this->rank->funcGetListRank(3);
			$aData['listBooster'] = $this->booster->funcGetAvailableBooster(3);
		}
		else if($sPage === 'overwatch'){
			$aData['listRank'] = $this->rank->funcGetListRank(4);
			$aData['listBooster'] = $this->booster->funcGetAvailableBooster(4);
		}
		else if($sPage === 'rocket-league'){
			$aData['listRank'] = $this->rank->funcGetListRank(5);
			$aData['listBooster'] = $this->booster->funcGetAvailableBooster(5);
		}

		// var_dump($aData);
		$this->session->set_userdata('referred_from', current_url());

		$this->load->view('templates_user/V_header', $aCart);
		$this->load->view('pages_user/V_games_'.$sPage, $aData);
		$this->load->view('templates_user/V_footer');
	}

	public function funcCalculatePrice(){
		$this->load->model('rank');

		$currentRank = $this->input->post('current_rank');
		$desiredRank = $this->input->post('desired_rank');
		$price = $this->rank->funcCalculatePrice($currentRank, $desiredRank)[0];

			$output = '<h3>Price : $<span id="price"><input type="text" id="total_price" name="price" style="color:white;border: none;background: transparent;" value="'.$price['base_price'].'" readonly></span><h3>';
        // }
		echo "$output";
	}

}?>