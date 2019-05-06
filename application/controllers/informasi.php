<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi extends CI_Controller {
    public function __construct(){
        parent :: __construct();
        $this->load->model('Menu_model');   
    }

    public function Pengumuman(){
        
        $data['title']='Pengumuman';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['post']= $this->db->get('user_post')->result_array();
            
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('informasi/pengumuman',$data);
        $this->load->view('templates/footer');
    }

    //pembagian Kelompok view mahasiswa
    public function Kelompok(){
        $data['title']='Pembagian Kelompok';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $data['kelas']=$this->db->get('user_matkul')->result_array();
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('informasi/kelompok',$data);
            $this->load->view('templates/footer');
    }

    //view mahasiswa
    public function v_kelompok($kodemk){
        
        $data['title']='Daftar Kelompok ';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['v_matkul']=$this->db->get_where('user_matkul',['kodemk' => $kodemk])->row_array();
        $data['v_kelompok']= $this->Menu_model->getKelompok($kodemk);
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('informasi/v_kelompok',$data);
        $this->load->view('templates/footer');
    }

    //view mahasiswa
    public function edit_kelompok($kodemk){
        
        $data['title']='Data Mahasiswa';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['v_matkul']=$this->db->get_where('user_matkul',['kodemk' => $kodemk])->row_array();
        $data['data_kelompok']= $this->Menu_model->getKelompok($kodemk);
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('informasi/edit_kelompok',$data);
        $this->load->view('templates/footer');
    }

}