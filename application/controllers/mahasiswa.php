<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

    public function index(){
        
        $data['title']='Pendaftaran Tugas Besar';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('daftar_model','kodemk');

        $data['matkul']= $this->kodemk->getDaftar();
        $data['kodem']= $this->db->get('user_daftar')->result_array();

        $data['mkkode']= $this->db->get('user_matkul')->result_array();

        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('mahasiswa/daftar',$data);
            $this->load->view('templates/footer');
        }else {
            $data=[
                'kodem'=> $this->input->get('user_daftar')
            ];
            $this->db->insert('user_matkul',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            New data added! </div> ');
            redirect('mahasiswa');
        }
    }

    // public function hasil(){
        
    //     $data['title']='Kartu Hasil Studi';
    //     $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
    //     $this->load->view('templates/header',$data);
    //     $this->load->view('templates/sidebar',$data);
    //     $this->load->view('templates/topbar',$data);
    //     $this->load->view('mahasiswa/daftar',$data);
    //     $this->load->view('templates/footer');
    // }
}