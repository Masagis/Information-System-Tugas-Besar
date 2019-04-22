<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi extends CI_Controller {

    public function pengumuman(){
        
        $data['title']='';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('informasi/pengumuman');
        $this->load->view('templates/footer');
    }

    public function kelompok(){
        
        $data['title']='Pembagian Anggota Kelompok';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('informasi/kelompok',$data);
        $this->load->view('templates/footer');
    }
}