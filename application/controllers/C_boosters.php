<?php

class C_boosters extends CI_Controller {
	
	public function __construct(){
		// session_start();
		parent::__construct();
	}

	public function index(){
        $this->load->model('booster');
        
		$aData['listBooster'] = $this->booster->funcGetListBooster();
		$aData['listBoosterCSGO'] = $this->booster->funcGetSelectedBooster(0);
		$aData['listBoosterAPEX'] = $this->booster->funcGetSelectedBooster(1);
		$aData['listBoosterDOTA'] = $this->booster->funcGetSelectedBooster(2);
		$aData['listBoosterLOL'] = $this->booster->funcGetSelectedBooster(3);
		$aData['listBoosterOW'] = $this->booster->funcGetSelectedBooster(4);
		$aData['listBoosterRL'] = $this->booster->funcGetSelectedBooster(5);

		$this->load->view('templates_user/V_header');
		$this->load->view('pages_user/V_boosters', $aData);
		$this->load->view('templates_user/V_footer');
    }
}