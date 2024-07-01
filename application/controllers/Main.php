<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Main extends CI_Controller {

public function index()
    {    
        $data['Kategori'] = $this->Kategori_model->get_all_kategori();
        $data['film'] = $this->DaftarFilm->get_all_film();
        
        $this->load->view('layouts/header');        
        $this->load->view('layouts/popup');        
        $this->load->view('layouts/topbar');        
        $this->load->view('cinematiket/home', $data);        
        $this->load->view('layouts/footer');        
    }
        
}
        
    /* End of file  main.php */
        
                            