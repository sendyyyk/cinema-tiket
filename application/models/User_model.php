<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Pastikan database di-load
    }

    public function insert_user($data)
    {
        return $this->db->insert('user', $data);
    }

    public function get_user_by_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function get_all_user()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function update_is_active($user_id, $status)
    {
        $data = array(
            'is_active' => $status
        );

        $this->db->where('id', $user_id);
        return $this->db->update('user', $data);
    }
}
