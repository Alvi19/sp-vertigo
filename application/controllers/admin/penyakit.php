<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penyakit extends CI_Controller
{
   public function index()
   {

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/penyakit/index.php');
      $this->load->view('admin/parts/footer.php');
   }

   public function create()
   {

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/penyakit/create.php');
      $this->load->view('admin/parts/footer.php');
   }
}

/* End of file penyakit.php */
