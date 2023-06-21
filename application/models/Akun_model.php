<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{
   private $_table = "user";

   public function rules()
   {
      return [
         [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'
         ],
         [
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
         ],
         [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required'
         ],
         [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
         ],
         // [
         //    'field' => 'konfirmasi_password',
         //    'label' => 'Konfirmasi Password',
         //    'rules' => 'required'
         // ],
      ];
   }

   public function get($id)
   {
      $this->db->where('id', $id);
      $query = $this->db->get($this->_table);
      return $query->row();
   }

   public function create($nama, $username, $email, $password)
   {
      $data = [
         'nama' => $nama,
         'username' => $username,
         'email' => $email,
         'password' => $password,
         // 'konfirmasi_password' => $konfirmasi_password
      ];
      $this->db->insert($this->_table, $data);
   }

   public function edit($id, $nama, $username, $email, $password)
   {
      $data = [
         'nama' => $nama,
         'username' => $username,
         'email' => $email,
         'password' => $password,
         // 'konfirmasi_password' => $konfirmasi_password
      ];
      $this->db->set($data);
      $this->db->where('id', $id);
      $this->db->update($this->_table);
   }

   public function delete($id)
   {

      $this->db->where('id', $id);
      $this->db->delete($this->_table);
   }
}
