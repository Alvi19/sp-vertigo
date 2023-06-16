<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gejala extends CI_Controller
{
   public function index()
   {
      $data = $this->db->get('gejala')->result();

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/gejala/index.php', compact('data'));
      $this->load->view('admin/parts/footer.php');
   }

   public function create()
   {
      $this->load->model('gejala_model');
      $this->load->library('form_validation');

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
      $this->load->view('admin/gejala/create.php', compact('nama_gejala', 'bobot'));
      $this->load->view('admin/parts/footer.php');
   }

   public function edit($id)
   {
      $this->load->model('gejala_model');
      $this->load->library('form_validation');

      $rules = $this->gejala_model->rules();
      $this->form_validation->set_rules($rules);

      $gejala = $this->gejala_model->get($id);

      if (!$gejala) {
         redirect('admin/gejala');
      }
      $nama_gejala = $this->input->post('nama_gejala') ?? $gejala->nama_gejala;
      $bobot = $this->input->post('bobot') ?? $gejala->bobot;

      if ($this->form_validation->run()) {
         $this->gejala_model->edit($id, $nama_gejala, $bobot);

         $this->session->set_flashdata('sukses', 'Data Berhasil Di Simpan');
         redirect('admin/gejala');
      }

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/gejala/edit.php', compact('nama_gejala', 'bobot'));
      $this->load->view('admin/parts/footer.php');
   }

   public function delete($id)
   {
      $this->load->model('gejala_model');
      $gejala = $this->gejala_model->get($id);

      if ($gejala) {
         $this->gejala_model->delete($id);
         $this->session->set_flashdata('sukses', 'Data Berhasil Di Hapus');
      }

      redirect('admin/gejala');
   }
}

/* End of file gejala.php */
