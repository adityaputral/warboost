<?php

class C_dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        // $this->session->set_userdata('referred_from', current_url());

        $this->load->view('templates_user/V_header');
        $this->load->view('templates_user/V_sidebar');
        $this->load->view('pages_user/V_dashboard');
        $this->load->view('templates_user/V_footer');
    }

    public function func404()
    {
        $this->load->view('404');
    }
}
