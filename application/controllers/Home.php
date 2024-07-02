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

        // Ambil id_lokasi yang dipilih dari inputan user (misal dari POST atau GET)
        $id_lokasi = $this->input->post('lokasi-bioskop'); // Sesuaikan dengan input yang Anda gunakan

        // Panggil model RuangBioskop_model untuk mendapatkan ruangan berdasarkan id_lokasi
        if ($id_lokasi) {
            $data['ruangan'] = $this->RuangBioskop_model->get_ruangan_by_lokasi($id_lokasi);
        } else {
            // Jika tidak ada id_lokasi yang dipilih, berikan data ruangan kosong atau tampilkan pesan kesalahan
            $data['ruangan'] = []; // atau sesuaikan dengan logika bisnis Anda
        }

        $this->load->view('layouts/header');        
        $this->load->view('layouts/popup', $data);        
        $this->load->view('layouts/topbar');        
        $this->load->view('cinematiket/home', $data);        
        $this->load->view('layouts/footer');        
    }

}
        
/* End of file  home.php */
        
                            