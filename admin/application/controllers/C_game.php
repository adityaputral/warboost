<?php
class C_game extends CI_Controller {
 
 /*
  * To change this license header, choose License Headers in Project Properties.
  * To change this template file, choose Tools | Templates
  * and open the template in the editor.
  */
  
 /**
  * Description of Export Controller
  *
  * @author TechArise Team
  *
  * @email  info@techarise.com
  */
    
     public function __construct() {
         parent::__construct();
         $this->load->model('game');
     }
   // Dashboard
   public function index()
   {
        $this->load->view('templates_user/V_header');
        $this->load->view('templates_user/V_sidebar');
        $this->load->view('templates_user/V_topbar');
        $this->load->view('pages_user/V_addGame');
        $this->load->view('templates_user/V_footer');
   }   
   // Action Register
   public function actionRegister()
   {
     $this->load->library('form_validation');
     // field name, error message, validation rules
     $this->form_validation->set_rules('nama_game', 'Nama Game', 'trim|required');
     $this->form_validation->set_rules('id_genre', 'Genre', 'trim|required');
     $this->form_validation->set_rules('abreviasi', 'Abreviasi', 'trim|required');
  
     if($this->form_validation->run() == FALSE) {
       $this->index();
     } else {
       // post values
       $name = $this->input->post('nama_game');
       $genre = $this->input->post('id_genre');
       $abreviasi = $this->input->post('abreviasi');
       // set post values
       $this->game->setNamaGame($name);
       $this->game->upload_logo();
       $this->game->setGenre($genre);
       $this->game->setAbreviasi($abreviasi);
       // insert values in database
       $this->user->createGame();
       redirect('/game');
     }
   }

   public function upload_logo(){
    $config['upload_path']          = './assets/images/games';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 5120;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('berkas')){
        $error = array('error' => $this->upload->display_errors());
    }else{
        $data = array('upload_data' => $this->upload->data());
    }
   }
 }