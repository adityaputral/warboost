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
            $this->load->model('booster');

            $this->load->view('templates_user/V_header');
            $this->load->view('templates_user/V_sidebar');
            $this->load->view('templates_user/V_topbar');
            $this->load->view('pages_user/V_registerBooster');
            $this->load->view('templates_user/V_footer');
        } else{
            redirect('/');
        }
    }

    public function funcRegisterAdmin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('name');
        $nickname = $this->input->post('nickname');
        $tanggalLahir = $this->input->post('tanggalLahir');
        $nomorHP = $this->input->post('nomorHP');
        $email = $this->input->post('email');
        $rating = $this->input->post('rating');
        $status = $this->input->post('status');
        $aboutMe = $this->input->post('aboutMe');

        if($username != "" && $password != "" && $nama != "" && $nickname!="" && $tanggalLahir!="" && $nomorHP!="" && $email!="" && $rating!="" && $status!="" && $aboutMe!=""){
            $this->load->model('booster');
            if($this->booster->checkUsername($username)){
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Username already taken');
                redirect('/');
            }
            if($this->booster->checkNickName($nickname)){
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Nickname already taken');
                redirect('/');
            } 
            else{
                $res = $this->admin->addAdmin($username,$password,$nama,$nickName,$tanggalLahir,$nomorHp, $email,$rating,$idStatus,$pathProfilPic,$aboutMe);
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
