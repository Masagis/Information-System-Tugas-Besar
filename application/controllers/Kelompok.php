<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok extends CI_Controller {

    public function __construct(){    
        parent::__construct(); 
        $this->load->model('Kelompok_model');         
    }

    public function Eksport(){
        $data['title']='Export Anggota kelompok';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['kelompok'] = $this->Kelompok_model->getAnggota();   
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('Kelompok/Eksport',$data);
        $this->load->view('templates/footer');
       
      }
}