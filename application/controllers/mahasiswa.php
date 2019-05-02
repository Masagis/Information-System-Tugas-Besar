<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
    public function __construct(){
        parent :: __construct();
    }

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
}