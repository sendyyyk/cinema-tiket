<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Kategori_model extends CI_Model {
                        
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
               
    public function get_all_kategori()
    {
        $query = $this->db->get('genres');
        return $query->result();
    }
    public function get_films_by_category($categoryId)
    {
        $this->db->where('kategori_id', $categoryId);
        $query = $this->db->get('film');
        return $query->result();
    }
                        
                            
                        
}
                        
/* End of file Kategori_model.php */
    
                        