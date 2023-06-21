<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
   public function index()
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      $data = $this->db->get('user')->result();

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/akun/index.php', compact('data'));
      $this->load->view('admin/parts/footer.php');
   }

   public function create()
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      $this->load->model('akun_model');
      $this->load->library('form_validation');

      $rules = $this->akun_model->rules();
      $this->form_validation->set_rules($rules);

      $nama = $this->input->post('nama');
      $username = $this->input->post('username');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      // $konfirmasi_password = $this->input->post('konfirmasi_password');

      if ($this->form_validation->run()) {
         $this->akun_model->create($nama, $username, $email, $password);

         $this->session->set_flashdata('sukses', 'Data Berhasil Di Simpan');
         redirect('admin/akun');
      }

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/akun/create.php', compact('nama', 'username', 'email', 'password'));
      $this->load->view('admin/parts/footer.php');
   }
}
