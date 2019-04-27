<?php

class C_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        if($this->session->userdata('logged_in')){
            // $this->session->set_userdata('referred_from', current_url());
            $this->load->model('admin');

            $this->load->view('templates_user/V_header');
            $this->load->view('templates_user/V_sidebar');
            $this->load->view('templates_user/V_topbar');
            $this->load->view('pages_user/V_registerAdmin');
            $this->load->view('templates_user/V_footer');
        } else{
            redirect('/');
        }
    }

    public function funcRemoveAdmin($idBooster)
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->model('admin');

            $res = $this->admin->funcRemoveAdmin($idBooster);

            if ($res) {
                $this->session->set_flashdata('status', 'success');
                $this->session->set_flashdata('notification', 'Success');
                redirect('/dashboard');
                // echo $this->show_cart($id_user);
            } else {
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Failed');
                redirect('/dashboard');
            }
        }
    }

    public function funcRegisterAdmin(){
        $nama = $this->input->post('name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username != "" && $password != "" && $nama != ""){
            $this->load->model('admin');
            if($this->admin->checkUsername($username)){
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Username already taken');
                redirect('/');
            } else{
                $res = $this->admin->addAdmin($username, $password, $nama);
                if($res){
                    $this->session->set_flashdata('status', 'success');
                    $this->session->set_flashdata('notification', 'Please check your email');
                    redirect('/');
                }
                else{
                    $this->session->set_flashdata('status', 'error');
                    $this->session->set_flashdata('notification', 'Contact us via email at help@warboost.com');
                    redirect('/');
                }
            }
            
        }
        else{
            $this->session->set_flashdata('status', 'error');
            $this->session->set_flashdata('notification', 'Please fill registration form correctly');
            redirect('/');
        }
    }
}
