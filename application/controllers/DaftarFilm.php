<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriFilm extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->model('DaftarFilm');
        
    }

    public function index()
    {
        $data['Kategori'] = $this->Kategori_model->get_all_kategori();
        $data['film'] = $this->DaftarFilm->get_all_film();

        $this->load->view('layout/header');     
        $this->load->view('main/kategoriFilm', $data);   
        $this->load->view('layout/footer');     
    }

    public function get_films_by_category()
    {
        $categoryId = $this->input->post('id');
        $films = $this->DaftarFilm->get_films_by_category($categoryId);

        echo json_encode($films);
    }
}

/* End of file KategoriFilm.php */
