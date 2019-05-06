<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {
    public function getSubMenu(){
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`. `menu_id` = `user_menu`.`id`
        " ;
        return $this->db->query($query)->result_array();
    }
    
    public function getUnduh(){
        return $this->db->get('user_daftar')->row_array();
    }

    public function getdataKhs(){
        return $this->db->get('user_daftar')->row_array();
    }

    public function getKelompok(){
        $query =  $this->db->get('user_daftar');
        return $query->result();
    }
    public function tampilnilai($id) {
        $query = "SELECT `user_nilai_mhs`.`id`, `user`.`name`, `user_nilai_mhs`.`tahun_ambil`, `user_nilai_mhs`.`nilai` 
            FROM `user_nilai_mhs`, `user`, `user_matkul`
            WHERE `user_nilai_mhs`.`id_mhs` = `user`.`id` 
            AND `user_nilai_mhs`.`id_matkul` = `user_matkul`.`id`
            AND `user_matkul`.`id` = $id

        ";
        return $this->db->query($query)->result_array();
        
    }
}