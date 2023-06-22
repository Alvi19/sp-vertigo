<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Diagnosa extends CI_Controller
{
   public function index()
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');
      $this->load->model('pasien_model');

      $data = $this->pasien_model->all();

      $this->load->model('admin_model');
      $this->load->view('admin/parts/header.php', ['title' => 'Diagnosa', 'user' => $this->admin_model->current_user()]);
      $this->load->view('admin/diagnosa/index.php', compact('data'));
      $this->load->view('admin/parts/footer.php');
   }
}
