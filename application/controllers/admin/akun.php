<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
   public function index()
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      $data = $this->db->get('admin')->result();

      $this->load->model('admin_model');
      $this->load->view('admin/parts/header.php', ['title' => 'Akun', 'user' => $this->admin_model->current_user()]);
      $this->load->view('admin/akun/index.php', compact('data'));
      $this->load->view('admin/parts/footer.php');
   }

   public function create()
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      $this->load->model('admin_model');
      $this->load->library('form_validation');

      $rules = $this->admin_model->rules_create();
      $this->form_validation->set_rules($rules);

      $nama = $this->input->post('nama');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      // $konfirmasi_password = $this->input->post('konfirmasi_password');

      if ($this->form_validation->run()) {
         $this->admin_model->create($nama, $username, $password);

         $this->session->set_flashdata('sukses', 'Data Berhasil Di Simpan');
         redirect('admin/akun');
      }

      $this->load->model('admin_model');
      $this->load->view('admin/parts/header.php', ['title' => 'Akun', 'user' => $this->admin_model->current_user()]);
      $this->load->view('admin/akun/create.php', compact('nama', 'username', 'password'));
      $this->load->view('admin/parts/footer.php');
   }

   public function edit($id)
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      $this->load->model('admin_model');
      $this->load->library('form_validation');

      $rules = $this->admin_model->rules_edit();
      $this->form_validation->set_rules($rules);

      $admin = $this->admin_model->get($id);

      if (!$admin) {
         redirect('admin/akun');
      }
      $nama = $this->input->post('nama') ?? $admin->nama;
      $username = $this->input->post('username') ?? $admin->username;
      $password = $this->input->post('password') ?? $admin->password;


      if ($this->form_validation->run()) {
         $this->admin_model->edit($id, $nama, $username, $password);

         $this->session->set_flashdata('sukses', 'Data Berhasil Di Simpan');
         redirect('admin/akun');
      }

      $this->load->model('admin_model');
      $this->load->view('admin/parts/header.php', ['title' => 'Akun', 'user' => $this->admin_model->current_user()]);
      $this->load->view('admin/akun/edit.php', compact('nama', 'username', 'password'));
      $this->load->view('admin/parts/footer.php');
   }

   public function delete($id)
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      $this->load->model('admin_model');
      $admin = $this->admin_model->get($id);

      if ($admin) {
         $this->admin_model->delete($id);
         $this->session->set_flashdata('sukses', 'Data Berhasil Di Hapus');
      }

      redirect('admin/akun');
   }
}
