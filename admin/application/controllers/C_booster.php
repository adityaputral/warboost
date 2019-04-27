<?php

class C_booster extends CI_Controller
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

    public function funcRegisterBooster(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $nickname = $this->input->post('ingame_nickname');
        $tanggalLahir = $this->input->post('tanggal_lahir');
        $nomorHP = $this->input->post('nomor_hp');
        $email = $this->input->post('email');
        $rating = $this->input->post('rating');
        $status = $this->input->post('id_status');
        $profilPic = $this->input->post('path_profilPic');
        $aboutMe = $this->input->post('about_me');
        
        if (empty($_FILES['path_profilPic']['name'])) {
            $this->session->set_flashdata('status', 'error');
            $this->session->set_flashdata('notification', 'Harap upload profil picture Anda');
            redirect('/');
        }
          if (isset($_FILES['path_profilPic'])  && is_uploaded_file($_FILES['path_profilPic']['tmp_name'])) {
            $sNewFileName         = $username."-".pathinfo($_FILES['path_profilPic']['name'],PATHINFO_EXTENSION);;
            $config['file_name']       = $sNewFileName;
            $config['upload_path']          = "../assets/images/profile/booster";
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['detect_mime']          = 'TRUE';
            $config['max_size']             = 5120;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $profilPic = $sNewFileName;
        
      
            $logo = $sNewFileName;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
      
            if (!$this->upload->do_upload('path_profilPic')) {
              $this->session->set_flashdata('status', 'error');
              $this->session->set_flashdata('notification', 'Ekstensi atau ukuran file PROFIL PICTURE tidak sesuai');
      
              $error = array('error' => $this->upload->display_errors());
              redirect('/');
            } else {
              $data = array('upload_data' => $this->upload->data());
            }
          }

        
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
                $res = $this->booster->addBooster($username,$password,$nama,$nickname,$tanggalLahir,$nomorHP,$email,$rating,$status,$profilPic,$aboutMe);
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
    
}
