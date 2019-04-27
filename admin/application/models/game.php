<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class game extends CI_Model{
	public function __construct(){
    	parent::__construct();
  }

 private $_namaGame;
 private $_namaLogo;
 private $_idGenre;
 private $_abreviasi;

 public function setNamaGame($namaGame){
     $this->_namaGame = $namaGame;
 }

 public function setLogo($logo){
     $this->_namaLogo = $logo;
 }

 public function setGenre($genre){
     $this->_idGenre = $genre;
 }

 public function setAbreviasi($abreviasi){
     $this->_abreviasi = $abreviasi;
 }

 function createGame(){
     $data = array(
         'nama_game' => $this->_namaGame,
         'path_logo' => $this->_namaLogo,
         'id_genre' => $this->_idGenre,
         'abreviasi' => $this->_abreviasi,
     );
     $result = $this->db->insert('game',$data);
     if($result){
        return true;
    }
    else{
        return false;
    }
 }  

}