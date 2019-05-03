<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_model extends CI_Model {
    public function getDaftar(){
        $query = "SELECT `user_daftar`.*, `user_matkul`.`kodemk`
                FROM `user_daftar` JOIN `user_matkul`
                ON `user_daftar`.`kodemk` = `user_matkul`.`id`
        " ;
        return $this->db->query($query)->result_array();
    }
}