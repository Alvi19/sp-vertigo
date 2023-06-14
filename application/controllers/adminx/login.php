<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('Admin_model');
   }

   public function index()
   {
      $this->load->view('admin/login.php');
   }

   public function login()
   {
      $rules = $this->auth_model->rules();
      $this->form_validation->set_rules($rules);

      if ($this->form_validation->run() == FALSE) {
         redirect('admin/login'); // Ganti "admin/login" dengan nama view yang sesuai
      } else {
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         if ($this->admin_model->login($username, $password)) {

            redirect('admin/dashboard'); // Ganti "admin/dashboard" dengan URL halaman admin yang sesuai
         } else {

            $data['error'] = 'Username atau password salah.';
            $this->load->view('admin/login.php', $data); // Ganti "admin/login" dengan nama view yang sesuai
         }
      }
   }

   public function dashboard()
   {
      $this->load->view('admin/dashboard'); // Ganti "admin/dashboard" dengan nama view yang sesuai
   }

   public function logout()
   {
      redirect('admin'); // Ganti "admin" dengan URL login admin yang sesuai
   }
}
