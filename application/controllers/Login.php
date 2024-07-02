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

    public function registrasi()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');

        if ($this->form_validation->run() == TRUE) {
            if(form_error('email')){
                $this->session->set_flashdata('error', 'Email Salah');
            }elseif(form_error('username')){
                $this->session->set_flashdata('error', 'Username Anda Sudah Terdaftar');
            }elseif(form_error('password')){
                $this->session->set_flashdata('error', 'Password Minimal 6 Karakter');
            }else{
                $this->session->set_flashdata('error', 'Isi Data Dibawah ini Secara Lengkap');
            }
            $this->load->view('');
        } else {
            // Data yang akan disimpan
            $data = array(
                'id' => Uniqid(),
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role_id' => 2,
                'is_active' => 0,
                'tanggal_input' => date('Y-m-d H:i:s')
            );

            // Simpan ke database
            if ($this->User_model->insert_user($data)) {
                $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
                redirect('Home');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
                redirect('Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
            }
        }
    }
    
        
}
        
    /* End of file  login.php */
