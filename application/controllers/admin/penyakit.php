<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penyakit extends CI_Controller
{
   public function index()
   {
      $data = $this->db->get('penyakit')->result();

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/penyakit/index.php', compact('data'));
      $this->load->view('admin/parts/footer.php');
   }

   public function create()
   {
      $this->load->model('penyakit_model');
      $this->load->library('form_validation');

      $rules = $this->penyakit_model->rules();
      $this->form_validation->set_rules($rules);

      $kategori = $this->input->post('kategori');
      $solusi = $this->input->post('solusi');
      $nama_penyakit = $this->input->post('nama_penyakit');
      $deskripsi = $this->input->post('deskripsi');

      if ($this->form_validation->run()) {
         $this->penyakit_model->create($kategori, $solusi, $nama_penyakit, $deskripsi);

         $this->session->set_flashdata('sukses', 'Data Berhasil Di Simpan');
         redirect('admin/penyakit');
      }

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/penyakit/create.php', compact('kategori', 'solusi', 'nama_penyakit', 'deskripsi'));
      $this->load->view('admin/parts/footer.php');
   }

   public function edit($id)
   {
      $this->load->model('penyakit_model');
      $this->load->library('form_validation');

      $rules = $this->penyakit_model->rules();
      $this->form_validation->set_rules($rules);

      $penyakit = $this->penyakit_model->get($id);

      if (!$penyakit) {
         redirect('admin/gejala');
      }
      $kategori = $this->input->post('kategori') ?? $penyakit->kategori;
      $solusi = $this->input->post('solusi') ?? $penyakit->kategori;
      $nama_penyakit = $this->input->post('nama_penyakit') ?? $penyakit->nama_penyakit;
      $deskripsi = $this->input->post('deskripsi') ?? $penyakit->deskripsi;


      if ($this->form_validation->run()) {
         $this->penyakit_model->edit($kategori, $solusi, $nama_penyakit, $deskripsi);

         $this->session->set_flashdata('sukses', 'Data Berhasil Di Simpan');
         redirect('admin/penyakit');
      }

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/penyakit/edit.php', compact('kategori', 'solusi', 'nama_penyakit', 'deskripsi'));
      $this->load->view('admin/parts/footer.php');
   }

   public function delete($id)
   {
      $this->load->model('penyakit_model');
      $penyakit = $this->penyakit_model->get($id);

      if ($penyakit) {
         $this->penyakit_model->delete($id);
         $this->session->set_flashdata('sukses', 'Data Berhasil Di Hapus');
      }

      redirect('admin/penyakit');
   }
}

/* End of file gejala.php */
