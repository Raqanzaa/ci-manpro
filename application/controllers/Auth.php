<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_users');
    }

    public function login() {
        if ($this->input->post('login')) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->m_users->login_user($email, $password);
            if ($user) {
<<<<<<< HEAD
                $this->session->set_userdata('user_id', $user['id']);
                redirect('dashboard');  // Pastikan URL controller 'dashboard' sesuai dengan route yang diinginkan
=======
                $this->session->set_userdata('user_id', $user['id_users']);
                redirect('dashboard'); // Ganti 'c_home' dengan halaman dashboard
>>>>>>> b122476367dcc8b0010602a7fb2bcc5b94142919
            } else {
                $this->session->set_flashdata('error', 'Email atau password salah.');
                redirect('LandingPage');
            }
        } else {
            redirect('LandingPage');
        }
    }

    public function register() {
        if ($this->input->post('register')) {
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[t_users.email]');
    
            if ($this->form_validation->run() == true) {
                $data = array(
                    'full_name' => $this->input->post('full_name'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'email' => $this->input->post('email')
                );
    
                if ($this->m_users->register_user($data)) {
                    $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
                    redirect('LandingPage?registered=true');
                } else {
                    $this->session->set_flashdata('error', 'Gagal menyimpan data.');
                    redirect('LandingPage');
                }
            } else {
                $this->session->set_flashdata('validation_errors', validation_errors());
                redirect('LandingPage');
            }
        } else {
            redirect('LandingPage');
        }
    }
    

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('auth/login');
    }
}
?>
