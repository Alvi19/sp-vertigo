<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

   public function index()
   {
      $this->load->view('admin/parts/header.php');
      $this->load->view('admin/dashboard.php');
      $this->load->view('admin/parts/footer.php');
   }
}

/* End of file dashboard.php */
