<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class RuangBioskop_model extends CI_Model {
                        
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function get_all_ruang_bioskop()
    {
        $this->db->select('lokasi_bioskop.*, ruang_bioskop.nama_ruang');
        $this->db->from('lokasi_bioskop');
        $this->db->join('ruang_bioskop', 'lokasi_bioskop.id_lokasi = ruang_bioskop.id_lokasi');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_ruangan_by_lokasi($id_lokasi)
    {
        $this->db->select('ruang_bioskop.*');
        $this->db->from('ruang_bioskop');
        $this->db->where('id_lokasi', $id_lokasi);
        $query = $this->db->get();
        return $query->result();
    }

}

/* End of file RuangBisokop.php */
