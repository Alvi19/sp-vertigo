<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_diri extends CI_Controller
{
   public function index()
   {
      if (!$this->session->userdata('admin_id')) redirect('auth/login');

      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/data_diri.php');
      $this->load->view('admin/parts/footer.php');
   }
}

/* End of file Data_diri.php */
