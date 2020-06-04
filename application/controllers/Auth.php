<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $this->load->view('auth/login');
        } else {
            // validasinya success
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {

            // cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'nama_user' => $user['nama_user'],
                    'status' => "login",
                    'level' => $user['admin']
                ];
                $this->session->set_userdata($data);
                if ($user['level'] == "admin") {
                    redirect('dashboard/');
                } else {
                    redirect('dashboard/');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {

            $this->form_validation->set_rules('nama_user', 'nama_user', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
                'is_unique' => 'This email has already registered!'
            ]);
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'Password dont match!',
                'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

            if ($this->form_validation->run() == false) {

                $this->load->view('auth/daftar');
            } else {
                $email = $this->input->post('email', true);
                $data = [
                    'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                    'email' => htmlspecialchars($email),
                    'image' => 'home-right.png',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'level' => 'admin'
                ];



                $this->db->insert('user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
                redirect('dashboard/admin');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">You have been logged out!</div>');


        redirect('auth/');
    }
}
