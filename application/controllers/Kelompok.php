<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok extends CI_Controller {
    
    public function Eksport(){
        $data['title']='Export Anggota kelompok';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('Kelompok/Eksport',$data);
        $this->load->view('templates/footer');
       
      }

      public function Import(){
        $data['title']='Import Anggota kelompok';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('Kelompok/Import',$data);
        $this->load->view('templates/footer');
       
      }
}