<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
    public function __construct(){
        parent :: __construct();
    }

    public function index(){
        
        $data['title']='Pendaftaran Tugas Besar';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $data['mkkode']= $this->db->get('user_matkul')->result_array();
        
        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('semester','Semester','required');
        $this->form_validation->set_rules('tahun','Tahun','required');
        $this->form_validation->set_rules('mk1','Mk1','required');
        $this->form_validation->set_rules('mk2','Mk2','required');
        $this->form_validation->set_rules('mk3','mk3','');

        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('mahasiswa/daftar',$data);
            $this->load->view('templates/footer');
        }else {
            $data=array(
                    'nim' => $this->input->post('nim'),
                    'name' => $this->input->post('name'),
                    'semester' => $this->input->post('semester'),
                    'tahun' => $this->input->post('tahun'),
                    'mk1' => $this->input->post('mk1'),
                    'mk2' => $this->input->post('mk2'),
                    'mk3' => $this->input->post('mk3'),
                    );
            $this->db->insert('user_daftar',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">
            New data added! </div> ');
            redirect('mahasiswa');
        }
    }

    public function Lamaran(){
        
        $data['title']='Pendaftaran Asisten';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('matkul','Matkul','required');
        $this->form_validation->set_rules('matkul1','matkul1');
        $this->form_validation->set_rules('matkul2','matkul2');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('mahasiswa/lamaran',$data);
            $this->load->view('templates/footer');
        }else{
                $config['upload_path'] = './assets/uploads/file_asisten/';    
                $config['allowed_types'] = 'rar|zip|pdf';
                $config['max_size']      = 0;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('filename')) {
                    echo $this->upload->display_errors();
                }else{

                    $upload_data = $this->upload->data();
                    $data =array(
                        'nim' => $this->input->post('nim'),
                        'name' => $this->input->post('name'),
                        'matkul' => $this->input->post('matkul'),
                        'matkul1' => $this->input->post('matkul1'),
                        'matkul2' => $this->input->post('matkul2'),
                        'filename' => $upload_data['file_name'],
                    );
                
                    $this->db->insert('user_asisten',$data);
                    $this->session->set_flashdata('message','<div class="alert alert-success" role ="alert">Upload data successfully! </div> ');
                    redirect('mahasiswa/lamaran');
                }
            }
        }

    public function Hasil(){
        
        $data['title']='Unduh Kartu Kelulusan';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('mahasiswa/hasil',$data);
        $this->load->view('templates/footer');
                
        }
        public function khs(){
            $data['title']='Kartu Hasil Tugas Besar';
            $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    
            $data['dataKhs']= $this->db->get('user_daftar')->result_array();

            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('mahasiswa/khs',$data);
            $this->load->view('templates/footer');
        }
    }
