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
        $this->db->join('ruang_bioskop', 'lokasi_bioskop.id_ruang_bioskop = ruang_bioskop.id_ruang_bioskop');
        // $this->db->join('jumlah_kursi', 'lokasi_bioskop.id_lokasi = total_kursi.id_kursi');
        $query = $this->db->get();
        return $query->result();
    } 

                            
                        
}
                        
/* End of file RuangBisokop.php */
    
                        