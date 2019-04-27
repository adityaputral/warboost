<?php
class C_tipeboosting2 extends CI_Controller
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
    public function index($jenisBoost)
    {
        $this->load->model('game');

        $aData['listGame'] = $this->game->funcGetListGame();
        $aData['jenisBoost'] = $jenisBoost;

        $this->load->view('templates_user/V_header');
        $this->load->view('templates_user/V_sidebar');
        $this->load->view('templates_user/V_topbar');
        $this->load->view('pages_user/V_tipeBoosting2', $aData);
        $this->load->view('templates_user/V_footer');
    }

    // Action Register
    public function funcAddSpek()
    {
        $jenisBoost = $this->input->post('jenis_boost');
        if ($jenisBoost == 1) {
            $this->load->model('level');


            $jumlahLevel = $this->input->post('jumlah_level');
            $idGame = $this->input->post('game');
            $basePrice = $this->input->post('base_price');

            $res = $this->level->funcInsertLevel($jumlahLevel, $idGame, $basePrice);
            if ($res) {
                $this->session->set_flashdata('status', 'success');
                $this->session->set_flashdata('notification', 'Data Anda telah kami rekam. Silahkan tunggu pemberitahuan selanjutnya dari kami.');
                redirect('/');
            } else {
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Terjadi kesalahan. Silahkan lakukan pendaftaran ulang');
                redirect('/');
            }
        } else if ($jenisBoost == 2) {
            $this->load->model('win');
            $id_game = $this->input->post('game');

            $jumlah_win1 = $this->input->post('jumlah_win1');
            $base_price1 = $this->input->post('base_price1');

            $jumlah_win2 = $this->input->post('jumlah_win2');
            $base_price2 = $this->input->post('base_price2');

            $jumlah_win3 = $this->input->post('jumlah_win3');
            $base_price3 = $this->input->post('base_price3');

            $jumlah_win4 = $this->input->post('jumlah_win4');
            $base_price4 = $this->input->post('base_price4');

            $jumlah_win5 = $this->input->post('jumlah_win5');
            $base_price5 = $this->input->post('base_price5');

            $data = array(
                array(
                    'jumlah_win' => $jumlah_win1,
                    'id_game' => $id_game,
                    'base_price' =>  $base_price1
                ),
                array(
                    'jumlah_win' => $jumlah_win2,
                    'id_game' => $id_game,
                    'base_price' =>  $base_price2
                ),
                array(
                    'jumlah_win' => $jumlah_win3,
                    'id_game' => $id_game,
                    'base_price' =>  $base_price3
                ),array(
                    'jumlah_win' => $jumlah_win4,
                    'id_game' => $id_game,
                    'base_price' =>  $base_price4
                ),array(
                    'jumlah_win' => $jumlah_win5,
                    'id_game' => $id_game,
                    'base_price' =>  $base_price5
                ),
            );


            $res = $this->win->funcInsertWin($data);
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
}
