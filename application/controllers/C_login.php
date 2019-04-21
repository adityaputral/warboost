<?php

class C_login extends CI_Controller {
	
	public function __construct(){
		// session_start();
        parent::__construct();
        $this->load->model('user');
	}

	public function funcLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('pwd');
        $username_check = $this->user->checkUsername($username);

        if($username_check){
            $password_db = $this->user->getPassword($username);
            if($password === $password_db){
                $login_item = $this->user->loginverify($username, $password_db);
                if($login_item){
                    foreach ($login_item as $row){
                        $id =  $row->id;
                        $username = $row->username;
                        $nama = $row->nama;
                    }
                    $userdata = array(
                        'id' => $id,
                        'username' => $username,
                        'nama' => $nama,
                        'logged_in' => true
                    );
                    $this->session->set_userdata($userdata);
                    redirect('/');
                }
                else{
                    $this->session->set_flashdata('status', 'error');
                    $this->session->set_flashdata('notification', 'Server Probably Down');
                    redirect('/');
                }
            }
            else{
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Incorrect Password');
                redirect('/');
            }
        }
        else{
            $this->session->set_flashdata('status', 'error');
            $this->session->set_flashdata('notification', 'Incorrect Username');
            redirect('/');
        }

        
    }

    function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('logged_in');
		redirect('/');
	}
}