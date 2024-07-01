<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {

public function __construct() {
    parent::__construct();
}

public function masuk()
{
    // Deklarasi library dan aturan validasi
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    // Logika otentikasi
    if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('error', 'Masukkan Username dan Password');
        redirect('Masukkan Username dan Password');
    } else {
        // Deklarasi variabel
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Ambil user dari database
        $user = $this->User_model->get_user_by_username($username);

        // Logika login sebagai user
        if ($user) {
            if (password_verify($password, $user->password)) {
                if ($this->User_model->get_all_user($user->id)) {
                    // Update is_active menjadi 1
                    $this->User_model->update_is_active($user->id, 1);

                    // Set session data
                    $this->session->set_userdata('login_active', 1);

                    $this->session->set_flashdata('success', 'Login berhasil! Selamat Datang Kembali');
                    redirect('home');
                } else {
                    $this->session->set_flashdata('error', 'Terjadi kesalahan saat login');
                    redirect('Terjadi kesalahan saat login');
                }
            } else {
                $this->session->set_flashdata('error', 'Password Salah');
                redirect('Password Salah');
            }
        } else {
            $this->session->set_flashdata('error', 'Username Tidak Diketahui');
            redirect('Username Tidak Diketahui');
        }
    }
}

        
}
        
    /* End of file  login.php */
        
                            