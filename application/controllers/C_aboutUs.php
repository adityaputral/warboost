<?php

class C_aboutUs extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->load->view('templates_user/V_header');
        $this->load->view('pages_user/V_aboutUs');
        $this->load->view('templates_user/V_footer');
    }
}