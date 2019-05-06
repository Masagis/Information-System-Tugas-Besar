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

    public function getSubMenuById($id){

        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
    public function tampilnilai($id) {
        $query = "SELECT `user_nilai_mhs`.`id`, `user`.`name`, `user_matkul`.`namamk`, `user_nilai_mhs`.`tahun_ambil`, `user_nilai_mhs`.`nilai` 
            FROM `user_nilai_mhs`, `user`, `user_matkul`
            WHERE `user_nilai_mhs`.`id_mhs` = `user`.`id` 
            AND `user_nilai_mhs`.`id_matkul` = `user_matkul`.`id`

        ";
        return $this->db->query($query)->result_array();
        #$data = $this->db->query($query)->result_array();
        #$options = array('id' => $id );
        #$Q = $this->db->get_where('user_nilai_mhs', $options, 1);
        #if ($Q->num_rows() > 0) {
        #    $data = $Q->row_array();
        #}
        #$Q->free_result();
        #return $data;
    }
}