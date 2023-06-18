<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
   public function index()
   {
      $data = $this->db->get('penyakit')->result();
      $this->load->model('pasien_model');
      $this->load->library('form_validation');


      $rules = $this->pasien_model->rules();
      $this->form_validation->set_rules($rules);

      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $jk = $this->input->post('jk');

      if ($this->form_validation->run()) {
         $id_pasien = $this->pasien_model->create($nama, $alamat, $jk);
         $this->pasien_model->login($id_pasien);


         $this->session->set_flashdata('sukses', 'Data Berhasil Di isi');
         redirect('penyakit');
      }


      $this->load->view('frontend/parts/header.php');
      $this->load->view('frontend/diagnosa/index.php', compact('data', 'nama', 'alamat', 'jk'));
      $this->load->view('frontend/parts/footer.php');
   }

   public function create()
   {
      $this->load->model('gejala_model');
      $this->load->library('form_validation');

      $data = $this->db->get('gejala')->result();

      $rules = $this->gejala_model->rules();
      $this->form_validation->set_rules($rules);

      $nama_gejala = $this->input->post('nama_gejala');
      $bobot = $this->input->post('bobot');

      if ($this->form_validation->run()) {
         $this->gejala_model->create($nama_gejala, $bobot);

         $this->session->set_flashdata('sukses', 'Data Berhasil Di Simpan');
         redirect('admin/gejala');
      }

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/gejala/create.php', compact('gejala'));
      $this->load->view('admin/parts/footer.php');
   }

   // public function hasil()
   // {
   //    $this->load->view('frontend/parts/header.php');
   //    $this->load->view('frontend/hasil.php');
   //    $this->load->view('frontend/parts/footer.php');
   // }
}

/* End of file Data_diri.php */
