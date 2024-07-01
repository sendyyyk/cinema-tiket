<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class DaftarFilm extends CI_Model {
   public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
                        
                        
    public function get_all_film()
    {
        $query = $this->db->get('daftar_film');
        return $query->result();
    }
                        
                        
}
                        
/* End of file daftarFilm.php */
    
                        