<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Kelompok_model extends CI_Model {
 
    public function getKelompok()
    {
        $query =  $this->db->order_by('tahun,kelas,mk1','ASC') ->get('user_daftar');
        return $query->result();
    }
 }
 