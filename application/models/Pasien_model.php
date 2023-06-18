<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
   private $_table = "pasien";
   const SESSION_KEY = 'pasien_id';


   public function rules()
   {
      return [
         [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'
         ],
         [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'
         ],
         [
            'field' => 'jk',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'
         ]
      ];
   }

   public function get($id)
   {
      $this->db->where('id', $id);
      $query = $this->db->get($this->_table);
      return $query->row();
   }

   public function create($nama, $alamat, $jk)
   {
      $data = [
         'nama' => $nama,
         'alamat' => $alamat,
         'JK' => $jk
      ];
      $this->db->insert($this->_table, $data);
      return $this->db->insert_id();
   }

   public function login($id)
   {
      $this->session->set_userdata([self::SESSION_KEY => $id]);

      return $this->session->has_userdata(self::SESSION_KEY);
   }

   public function current_user()
   {
      if (!$this->session->has_userdata(self::SESSION_KEY)) {
         return null;
      }

      $user_id = $this->session->userdata(self::SESSION_KEY);
      $query = $this->db->get_where($this->_table, ['id' => $user_id]);
      return $query->row();
   }

   // public function edit($id, $kode_kategori, $nama_kategori, $deskripsi)
   // {
   //    $data = [
   //       'kode_kategori' => $kode_kategori,
   //       'nama_kategori' => $nama_kategori,
   //       'deskripsi' => $deskripsi
   //    ];
   //    $this->db->set($data);
   //    $this->db->where('id', $id);
   //    $this->db->update($this->_table);
   // }

   // public function delete($id)
   // {

   //    $this->db->where('id', $id);
   //    $this->db->delete($this->_table);
   // }
}
