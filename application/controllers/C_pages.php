<?php
class C_pages extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
      
	public function funcIndex($sPage){
		$this->load->model('booster');
		$this->load->model('transaksi');
		$this->load->model('rank');
		$this->load->model('win');
		$this->load->model('level');
		$this->load->model('cart');
		$this->load->model('tipe_boosting');
		$this->load->model('game');

		$aHeader['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));
		$aHeader['games'] = $this->game->funcGetListGame();

		$idGame=$this->game->funcGetIdGame($sPage)['id'];
		
		// if($sPage === 'csgo'){
			$aData['tipeBoosting'] = $this->tipe_boosting->funcJenisBoosting($idGame);
			
			foreach ($this->tipe_boosting->funcJenisBoosting($idGame) as $jenis) {
				if($jenis['jenis_boost'] == 0){
					$aData['listRank'] = $this->rank->funcGetListRank($idGame);
				}
				if($jenis['jenis_boost'] == 1){
					$aData['listLevel'] = $this->level->funcGetListLevel($idGame);
				} 
				if($jenis['jenis_boost'] == 2){
					$aData['listWin'] = $this->win->funcGetListWin($idGame);
				}
			}
		
			$aData['listBooster'] = $this->booster->funcGetAvailableBooster($idGame);
		// } 
		// else if($sPage === 'apex-legends'){
		// 	$aData['listRank'] = $this->rank->funcGetListRank(1);
		// 	$aData['listBooster'] = $this->booster->funcGetAvailableBooster(1);
		// }
		// else if($sPage === 'dota-2'){
		// 	$aData['listRank'] = $this->rank->funcGetListRank(2);
		// 	$aData['listBooster'] = $this->booster->funcGetAvailableBooster(2);
		// }
		// else if($sPage === 'lol'){
		// 	$aData['listRank'] = $this->rank->funcGetListRank(3);
		// 	$aData['listBooster'] = $this->booster->funcGetAvailableBooster(3);
		// }
		// else if($sPage === 'overwatch'){
		// 	$aData['listRank'] = $this->rank->funcGetListRank(4);
		// 	$aData['listBooster'] = $this->booster->funcGetAvailableBooster(4);
		// }
		// else if($sPage === 'rocket-league'){
		// 	$aData['listRank'] = $this->rank->funcGetListRank(5);
		// 	$aData['listBooster'] = $this->booster->funcGetAvailableBooster(5);
		// }

		// var_dump($aData);
		$this->session->set_userdata('referred_from', current_url());

		$this->load->view('templates_user/V_header', $aHeader);
		$this->load->view('pages_user/V_games', $aData);
		$this->load->view('templates_user/V_footer');
	}

	public function funcCalculatePrice($jenis){
		if($jenis == 0){
			$this->load->model('rank');

			$currentRank = $this->input->post('current_rank');
			$desiredRank = $this->input->post('desired_rank');
			$price = $this->rank->funcCalculatePrice($currentRank, $desiredRank)[0];

				$output = '<h3>Price : $<span id="price"><input type="text" id="total_price" name="price" style="color:white;border: none;background: transparent;" value="'.$price['base_price'].'" readonly></span><h3>';
			// }
			echo "$output";
		} else if($jenis == 1){
			$this->load->model('level');

			$currentLevel= intval($this->input->post('current_level'));
			$desiredLevel = intval($this->input->post('desired_level'));
			$intervalLevel = $desiredLevel - $currentLevel;
			$idGame = $this->input->post('id_game');
			$price = $this->level->funcCalculatePrice($intervalLevel, $idGame);

				$output = '<h3>Price : $<span id="price"><input type="text" id="total_price" name="price" style="color:white;border: none;background: transparent;" value="'.$price['base_price']*$intervalLevel.'" readonly></span><h3>';
			// }
			echo "$output";
		} else if($jenis == 2){
			$this->load->model('win');

			$totalWin= $this->input->post('total_win');
			$idGame = $this->input->post('id_game');
			$price = $this->win->funcCalculatePrice($totalWin, $idGame)[0];

				$output = '<h3>Price : $<span id="price"><input type="text" id="total_price" name="price" style="color:white;border: none;background: transparent;" value="'.$price['base_price'].'" readonly></span><h3>';
			// }
			echo "$output";
		}
	}

}
