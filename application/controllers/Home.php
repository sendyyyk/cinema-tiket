<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['Kategori'] = $this->Kategori_model->get_all_kategori();
        $data['film'] = $this->DaftarFilm->get_all_film();
        $data['lokasi'] = $this->Lokasi_bioskop_model->get_all_lokasi_bioskop();
        $data['ruangan'] = $this->RuangBioskop_model->get_all_ruang_bioskop();

        $this->load->view('layouts/header');        
        $this->load->view('layouts/popup', $data);        
        $this->load->view('layouts/topbar');        
        $this->load->view('cinematiket/home', $data);        
        $this->load->view('layouts/footer');        
    }
        
}
        
/* End of file  home.php */
        
                            