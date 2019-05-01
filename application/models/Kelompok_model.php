<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Kelompok_model extends CI_Model {
 
    public function getAnggota(){ 
    //mengambil data daftar mahasiswa dari table anggota   
        return $this->db->get('anggota')->result();
     }
 }
 