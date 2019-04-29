<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi extends CI_Controller {

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
}