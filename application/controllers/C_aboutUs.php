<?php

class C_aboutUs extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('cart');

        $aHeader['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));
		$aHeader['games'] = $this->game->funcGetListGame();
        
        $this->session->set_userdata('referred_from', current_url());

        $this->load->view('templates_user/V_header',$aHeader);
        $this->load->view('pages_user/V_aboutUs');
        $this->load->view('templates_user/V_footer');
    }
}