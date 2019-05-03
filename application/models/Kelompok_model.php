<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Kelompok_model extends CI_Model {
 
    public function getKelompok(){ 
    //mengambil data daftar mahasiswa dari table anggota   
        return $this->db->get('user_kelompok')->result();
     }
 }
 