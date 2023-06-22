<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_diri extends CI_Controller
{
   public function index()
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      // $data = $this->db->get('')->result();
      // $this->load->model('pasien_model');
      // $this->load->library('form_validation');


      // $rules = $this->pasien_model->rules();
      // $this->form_validation->set_rules($rules);

      // $nama = $this->input->post('nama');
      // $alamat = $this->input->post('alamat');
      // $jk = $this->input->post('jk');

      // if ($this->form_validation->run()) {
      //    $id_pasien = $this->pasien_model->create($nama, $alamat, $jk);
      //    $this->pasien_model->login($id_pasien);


      //    $this->session->set_flashdata('sukses', 'Data Berhasil Di isi');
      //    redirect('penyakit');
      // }

      $this->load->model('admin_model');
      $this->load->view('admin/parts/header.php', ['title' => 'Daftar Data Diri', 'user' => $this->admin_model->current_user()]);
      $this->load->view('admin/data_diri.php');
      $this->load->view('admin/parts/footer.php');
   }
}

/* End of file Data_diri.php */
