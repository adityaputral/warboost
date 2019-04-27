<?php
class C_tipeboosting extends CI_Controller
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
        $this->load->model('game');

        $aData['listGame'] = $this->game->funcGetListGame();

        $this->load->view('templates_user/V_header');
        $this->load->view('templates_user/V_sidebar');
        $this->load->view('templates_user/V_topbar');
        $this->load->view('pages_user/V_tipeBoosting', $aData);
        $this->load->view('templates_user/V_footer');
    }

    // Action Register
    public function funcAddTipeBoosting()
    {
        $this->load->model('tipe_boosting');

        $namaBoosting = $this->input->post('nama_boosting');
        $game = $this->input->post('game');
        $jenisBoost = $this->input->post('jenis_boost');

        $res = $this->tipe_boosting->funcInsertTipeBoosting($namaBoosting, $game, $jenisBoost);
        if ($res) {
            $this->session->set_flashdata('status', 'success');
            $this->session->set_flashdata('notification', 'Data Anda telah kami rekam. Silahkan tunggu pemberitahuan selanjutnya dari kami.');
            redirect("/tipe-boosting2/$jenisBoost");
        } else {
            $this->session->set_flashdata('status', 'error');
            $this->session->set_flashdata('notification', 'Terjadi kesalahan. Silahkan lakukan pendaftaran ulang');
            redirect('/game');
        }
    }
}
