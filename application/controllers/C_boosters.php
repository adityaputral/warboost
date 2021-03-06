<?php

class C_boosters extends CI_Controller
{

	public function __construct()
	{
		// session_start();
		parent::__construct();
	}

	public function index(){
				$this->load->model('cart');
		$this->load->model('booster');

		$aData['listBooster'] = $this->booster->funcGetListBooster();
		$aData['listBoosterCSGO'] = $this->booster->funcGetSelectedBooster(0);
		$aData['listBoosterAPEX'] = $this->booster->funcGetSelectedBooster(1);
		$aData['listBoosterDOTA'] = $this->booster->funcGetSelectedBooster(2);
		$aData['listBoosterLOL'] = $this->booster->funcGetSelectedBooster(3);
		$aData['listBoosterOW'] = $this->booster->funcGetSelectedBooster(4);
		$aData['listBoosterRL'] = $this->booster->funcGetSelectedBooster(5);

		$aHeader['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));
		$aHeader['games'] = $this->game->funcGetListGame();
		// var_dump($aData);

		$this->session->set_userdata('referred_from', current_url());

		$this->load->view('templates_user/V_header', $aHeader);
		$this->load->view('pages_user/V_boosters', $aData);
		$this->load->view('templates_user/V_footer');
	}

	public function funcDetailBoosters($username)
	{
		$this->load->model('cart');
		$this->load->model('booster');

		$aData['dataBooster'] = $this->booster->funcGetDataBooster($username)[0];

		$aHeader['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));
		$aHeader['games'] = $this->game->funcGetListGame();

		$this->session->set_userdata('referred_from', current_url());

		$this->load->view('templates_user/V_header', $aHeader);
		$this->load->view('pages_user/V_detailBooster', $aData);
		$this->load->view('templates_user/V_footer');
	}
}
