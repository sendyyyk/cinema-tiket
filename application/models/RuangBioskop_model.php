<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class RuangBioskop_model extends CI_Model {
                        
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
                
    public function get_all_ruang_bioskop()
    {
        // Pilih kolom yang diperlukan dari tabel 'ruang_bioskop' dan tabel 'lokasi_bioskop'
        $this->db->select('ruang_bioskop.*, ruang_bioskop.id_lokasi');
        $this->db->from('ruang_bioskop');
        $this->db->join('lokasi_bioskop', 'ruang_bioskop.id_lokasi = lokasi_bioskop.id_lokasi');
        // Ambil hasil query
        $query = $this->db->get();
        return $query->result();
    }

                            
                        
}
                        
/* End of file RuangBisokop.php */
    
                        