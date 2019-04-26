<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function __construct(){
        parent :: __construct();
        is_logged_in();
    }

    public function index(){
        
        $data['title']='Menu Management';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['menu']= $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu','Menu', 'required');

        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/index',$data);
            $this->load->view('templates/footer');
        }else {
            $this->db->insert('user_menu',['menu'=> $this->input->post('menu')]);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            New menu added </div> ');
            redirect('menu');
        }
    }
    public function submenu(){
        
        $data['title']='Submenu Management';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model','menu');

        $data['subMenu']= $this->menu->getSubmenu();
        $data['menu']= $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title','Title', 'required');
        $this->form_validation->set_rules('menu_id','Menu', 'required');
        $this->form_validation->set_rules('url','URL', 'required');
        $this->form_validation->set_rules('icon','icon', 'required');
        
        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/submenu',$data);
            $this->load->view('templates/footer');
        }else {
            $data=[
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            New sub menu added! </div> ');
            redirect('menu/submenu');
        }
    }

    // public function class(){
        
    //     $data['title']='Buka Kelas';
    //     $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

    //     $data['kodem']= $this->db->get('user_daftar')->result_array();
        
    //     $this->form_validation->set_rules('kodemk','kodemk', 'required');
    //     $this->form_validation->set_rules('namamk','namamk', 'required');
    //     $this->form_validation->set_rules('sksmk','sksmk', 'required');

    //     if ($this->form_validation->run()==false) {
    //         $this->load->view('templates/header',$data);
    //         $this->load->view('templates/sidebar',$data);
    //         $this->load->view('templates/topbar',$data);
    //         $this->load->view('menu/class',$data);
    //         $this->load->view('templates/footer');
    //     }else {
    //         $data=[
    //             'kodemk' => $this->input->post('kodemk'),
    //             'namamk' => $this->input->post('namamk'),
    //             'sksmk' => $this->input->post('sksmk'),

    //         ];
    //         $this->db->insert('user_daftar',$data);
    //         $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
    //         New sub menu added! </div> ');
    //         redirect('menu/class');
    //     }
    // }

    // public function deleteClass($id)
    // {
    //     $this->db->delete('user_daftar',['id'=>$id]);
    //     $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
    //         Data has been delete! </div> ');
    //         redirect('menu/class');
    // }

        // public function upload(){
            
        //     $data['title']='Upload Nilai';
        //     $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        //     $this->load->view('templates/header',$data);
        //     $this->load->view('templates/sidebar',$data);
        //     $this->load->view('templates/topbar',$data);
        //     $this->load->view('menu/upload',$data);
        //     $this->load->view('templates/footer');
        // }

        // public function kelompok(){
            
        //     $data['title']='Pembagian Kelompok';
        //     $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        //     $this->load->view('templates/header',$data);
        //     $this->load->view('templates/sidebar',$data);
        //     $this->load->view('templates/topbar',$data);
        //     $this->load->view('menu/kelompok',$data);
        //     $this->load->view('templates/footer');
        // }

        // public function asisten(){
            
        //     $data['title']='Data Pelamar Asisten';
        //     $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        //     $this->load->view('templates/header',$data);
        //     $this->load->view('templates/sidebar',$data);
        //     $this->load->view('templates/topbar',$data);
        //     $this->load->view('menu/asisten',$data);
        //     $this->load->view('templates/footer');
        // }
}