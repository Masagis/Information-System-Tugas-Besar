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
    
    public function getUnduh($kodemk){
        $query =  "SELECT `user_daftar`.* 
        FROM `user_daftar`
        WHERE `kodemk` ='$kodemk'
        ";
        return $this->db->query($query)->row_array();
    }

    public function getMatkul($kodemk){
        $query =  "SELECT `user_matkul`.* 
        FROM `user_matkul`
        WHERE `kodemk` ='$kodemk'
        ";
        return $this->db->query($query)->row_array();
    }

    public function getdataKhs(){
        return $this->db->get('user_daftar')->row_array();
    }

    public function getKelompok($kodemk){
        $query =  "SELECT `user_daftar`.*,`user_matkul`.`namamk` 
        FROM `user_daftar`, `user_matkul`
        WHERE `user_daftar`.`kodemk` = `user_matkul`.`kodemk`
        AND `user_daftar`.`kodemk` ='$kodemk'
        ";
        return $this->db->query($query)->result_array();
    }
    public function getHasil(){
        $query =  "SELECT `user_daftar`.*,`user_matkul`.`namamk` 
        FROM `user_daftar`, `user_matkul`
        WHERE `user_daftar`.`kodemk` = `user_matkul`.`kodemk`
        ";
        return $this->db->query($query)->result_array();
    }

    Public function tampilnilai($kodemk) {
        $query = "SELECT `user_daftar`.`id`, `user_daftar`.`name`, `user_matkul`.`kodemk`, `user_daftar`.`tahun`, `user_daftar`.`nilai` 
            FROM `user_daftar`, `user_matkul`
            WHERE `user_daftar`.`id` = `user_matkul`.`id` 
            AND `user_daftar`.`kodemk` = '$kodemk'
        ";
        return $this->db->query($query)->result_array();
    }
}