<?php

class C_register extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	function funcRegister(){
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('pwd');
        
        if($username != "" && $password != "" && $nama != "" && $email != ""){
            $this->load->model('user');
            if($this->user->checkUsername($username)){
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Username already taken');
                redirect('/');
            } else{
                $res = $this->user->addUser($username, $password, $nama, $email);
                if($res){
                    $this->session->set_flashdata('status', 'success');
                    $this->session->set_flashdata('notification', 'Please check your email');
                    $referred_from = $this->session->userdata('referred_from');
                    redirect($referred_from, 'refresh');
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