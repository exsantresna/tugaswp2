<?php 

class Mahasiswa extends CI_Controller 
{
    function __construct()
     { 
         parent::__construct(); 
         
        } 
     public function index() 
     {
        $this->load->view('v_header');
        $this->load->view('view-form-mahasiswa');
        $this->load->view('v_footer');
         
         }
          public function cetak()
           { 
               $data = [
                
                   'kode' => $this->input->post('kode'),
                   'tl' => $this->input->post('tl'), 
                   'nama' => $this->input->post('nama'), 
                   'kl' => $this->input->post('kl'), 
                   'jr' => $this->input->post('jr') 
                ];
                $this->load->view('v_header');
                 $this->load->view('view-data-mahasiswa', $data);
                 $this->load->view('v_footer'); 
                } 
            }