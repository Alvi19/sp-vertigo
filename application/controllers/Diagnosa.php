<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
   private function loadView($file, $data = null)
   {
      $this->load->view('frontend/parts/header.php');
      $this->load->view('frontend/' . $file, $data);
      $this->load->view('frontend/parts/footer.php');
   }

   public function index()
   {
      // $data['penyakit'] = $this->db->get('penyakit');

      $this->loadView('home.php');
   }

   public function diagnosa()
   {
      $this->loadView('diagnosa.php');
   }
}

/* End of file Controllername.php */