<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class game extends CI_Model{
	public function __construct(){
    	parent::__construct();
  }

  public function funcInsertGame($namaGame, $path_logo, $idGenre, $abreviasi){
    $data = array(
        'nama_game' => $namaGame, 
        'path_logo' => $path_logo, 
        'id_genre' => $idGenre,
        'abreviasi' => $abreviasi
    );

    $result = $this->db->insert('game', $data);

    if($result){
        return true;
    }
    else{
        return false;
    }
  }

  function funcGetListGame(){
    $aListGame = $this->db->get('game');
    return $aListGame->result_array();
}

}