<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_diri extends CI_Controller
{
   public function index()
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      $this->load->model('admin_model');
      $this->load->library('form_validation');

      $rules = $this->admin_model->rules_data_diri();
      $this->form_validation->set_rules($rules);

      // print_r($this->input->post());
      // return;

      if ($this->form_validation->run()) {
         // return 'jhjkh';
         $nama = $this->input->post('nama');
         $username = $this->input->post('username');
         $email = $this->input->post('email');
         $no_hp = $this->input->post('no_hp');
         $alamat = $this->input->post('alamat');
         $jk = $this->input->post('jk');


         $this->admin_model->update_data_diri($this->admin_model->current_user()->id, $nama, $username, $email, $no_hp, $alamat, $jk);

         $this->session->set_flashdata('sukses', 'Data Berhasil Di Simpan');
      }

      $this->load->model('admin_model');
      $this->load->view('admin/parts/header.php', ['title' => 'Daftar Data Diri', 'user' => $this->admin_model->current_user()]);
      $this->load->view('admin/data_diri.php');
      $this->load->view('admin/parts/footer.php');
   }
}

/* End of file Data_diri.php */
