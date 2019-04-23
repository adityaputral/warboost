<?php

class C_aboutUs extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('cart');

        $aCart['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));
        
        $this->session->set_userdata('referred_from', current_url());

        $this->load->view('templates_user/V_header',$aCart);
        $this->load->view('pages_user/V_aboutUs');
        $this->load->view('templates_user/V_footer');
    }
}