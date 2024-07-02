<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Lokasi_bioskop_model extends CI_Model {
                        
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }              

    public function get_all_lokasi_bioskop()
    {
        $this->db->select('lokasi_bioskop.*, nama_bioskop.nama_bioskop, nama_bioskop.gambar_bioskop');
        $this->db->from('lokasi_bioskop');
        $this->db->join('nama_bioskop', 'lokasi_bioskop.id_bioskop = nama_bioskop.id_bioskop');
        // $this->db->join('jumlah_kursi', 'lokasi_bioskop.id_lokasi = total_kursi.id_kursi');
        $query = $this->db->get();
        return $query->result();
    }                                    

}