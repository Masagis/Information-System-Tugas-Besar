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
        $data['id']= $this->db->get('user_menu')->result_array();
        $data['subMenuA11']= $this->db->get('user_sub_menu')->result_array();

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

    public function ubahSubMenu($id) {
        $data['title']='Submenu Management';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model','menu');

        $data['subMenu']= $this->menu->getSubmenu();
        $data['menu']= $this->db->get('user_menu')->result_array();
        $data['subMenuAll']= $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();

        $this->form_validation->set_rules('title','Title', 'required');
        $this->form_validation->set_rules('menu_id','Menu', 'required');
        $this->form_validation->set_rules('url','URL', 'required');
        $this->form_validation->set_rules('icon','icon', 'required');
        
        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/ubahSubMenu',$data);
            $this->load->view('templates/footer');
        }else {
            $data=[
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            Sub Menu has been updated! </div> ');
            redirect('menu/submenu');
        }
    }

    public function class(){
        $data['title']='Buka Kelas';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['kodem']= $this->db->get('user_matkul')->result_array();
        
        $this->form_validation->set_rules('kodemk','KodeMK', 'required');
        $this->form_validation->set_rules('namamk','NamaMK', 'required');
        $this->form_validation->set_rules('kelas','Kelas', 'required');
        $this->form_validation->set_rules('sksmk','SksMK', 'required');

        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/class',$data);
            $this->load->view('templates/footer');
        }else {
            $data=[
                'kodemk' => $this->input->post('kodemk'),
                'namamk' => $this->input->post('namamk'),
                'kelas' => $this->input->post('kelas'),
                'sksmk' => $this->input->post('sksmk'),

            ];
            $this->db->insert('user_matkul',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            New class added! </div> ');
            redirect('menu/class');
        }
    }

    public function ubahclass($id){
        $data['title']='Buka Kelas';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['kodem']= $this->db->get('user_matkul')->result_array();
        $data['classAll']= $this->db->get_where('user_matkul', ['id' => $id])->row_array();
        
        $this->form_validation->set_rules('kodemk','KodeMK', 'required');
        $this->form_validation->set_rules('namamk','NamaMK', 'required');
        $this->form_validation->set_rules('kelas','Kelas', 'required');
        $this->form_validation->set_rules('sksmk','SksMK', 'required');

        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/ubahClass',$data);
            $this->load->view('templates/footer');
        }else {
            $data=[
                'kodemk' => $this->input->post('kodemk'),
                'namamk' => $this->input->post('namamk'),
                'kelas' => $this->input->post('kelas'),
                'sksmk' => $this->input->post('sksmk'),

            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_matkul', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            Class has been updated! </div> ');
            redirect('menu/class');
        }
    }

    public function Post(){
        $data['title']='Post Pengumuman';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['post']= $this->db->get('user_post')->result_array();
        
        $this->form_validation->set_rules('title_post','title_post', 'required');
        $this->form_validation->set_rules('isi_post','isi_post', 'required');

        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/post',$data);
            $this->load->view('templates/footer');
        }else {
            $data=[
                'title_post' => $this->input->post('title_post'),
                'isi_post' => $this->input->post('isi_post'),
            ];
            $this->db->insert('user_post',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            New post added! </div> ');
            redirect('menu/post');
        }
    }
    
    public function ubahPost($id_post) {

        $data['title']='Pengumuman';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        

        $data['post']= $this->db->get('user_post')->result_array();
        $data['postAll']= $this->db->get_where('user_post', ['id_post' => $id_post])->row_array();

        $this->form_validation->set_rules('title_post','title_post', 'required');
        $this->form_validation->set_rules('isi_post','isi_post', 'required');
        
        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/ubahPost',$data);
            $this->load->view('templates/footer');
        }else {
            $data=[
                'title_post' => $this->input->post('title_post'),
                'isi_post' => $this->input->post('isi_post'),
            ];
            $this->db->where('id_post', $this->input->post('id_post'));
            $this->db->update('user_post', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            Post has been updated! </div> ');
            redirect('menu/post');
        }
    }

    public function Asisten(){
        $data['title']='Data Pelamar Asisten';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['asisten']= $this->db->get('user_asisten')->result_array();

            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/asisten',$data);
            $this->load->view('templates/footer');
    }

    public function Kelompok(){
        $data['title']='Pembagian Kelompok';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['kelompok']= $this->db->get('user_daftar')->result_array(); 

            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/kelompok',$data);
            $this->load->view('templates/footer');
    }
    
}