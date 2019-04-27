<?php
class C_game extends CI_Controller
{

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

  public function __construct()
  {
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
  public function addGame()
  {
    $namaGame = $this->input->post('name_game');
    $genre = $this->input->post('id_genre');
    $abreviasi = $this->input->post('abreviasi');
    $logo = $this->input->post('path_logo');

    if (empty($_FILES['path_logo']['name'])) {
      $this->session->set_flashdata('status', 'error');
      $this->session->set_flashdata('notification', 'Harap upload logo game');
      redirect('/');
    }
    if (isset($_FILES['path_logo'])  && is_uploaded_file($_FILES['path_logo']['tmp_name'])) {
      $sNewFileName         = "Games_".$abreviasi.".".pathinfo($_FILES['path_logo']['name'],PATHINFO_EXTENSION);;
      $config['file_name']       = $sNewFileName;
      $config['upload_path']          = "../assets/images/games/";
      $config['allowed_types']        = 'jpeg|jpg|png';
      $config['detect_mime']          = 'TRUE';
      $config['max_size']             = 5120;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      $logo = $sNewFileName;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('path_logo')) {
        $this->session->set_flashdata('status', 'error');
        $this->session->set_flashdata('notification', 'Ekstensi atau ukuran file BUKTI PEMBAYARAN tidak sesuai');

        $error = array('error' => $this->upload->display_errors());
        redirect('/');
      } else {
        $data = array('upload_data' => $this->upload->data());
      }
    }

    $this->load->model('game');

    $res = $this->game->funcInsertGame($namaGame, $logo, $genre,$abreviasi);
    if ($res) {
      $this->session->set_flashdata('status', 'success');
      $this->session->set_flashdata('notification', 'Data Anda telah kami rekam. Silahkan tunggu pemberitahuan selanjutnya dari kami.');
      redirect('/');
    } else {
      $this->session->set_flashdata('status', 'error');
      $this->session->set_flashdata('notification', 'Terjadi kesalahan. Silahkan lakukan pendaftaran ulang');
      redirect('/');
    }
  }
}
