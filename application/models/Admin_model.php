<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
   private $_table = "admin";
   const SESSION_KEY = 'admin_id';

   public function rules()
   {
      return [
         [
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
         ],
         [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|max_length[255]'
         ]
      ];
   }

   public function rules_create()
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
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|max_length[255]'
         ]
      ];
   }

   public function rules_edit()
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
         ]
      ];
   }

   public function rules_data_diri()
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
            'label' => 'email',
            'rules' => 'required'
         ],
         [
            'field' => 'no_hp',
            'label' => 'No Hp',
            'rules' => 'required'
         ],
         [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'
         ],
         [
            'field' => 'jk',
            'label' => 'Jenis kelamin',
            'rules' => 'required'
         ]
      ];
   }

   public function login($username, $password)
   {
      $this->db->where('username', $username);
      $query = $this->db->get($this->_table);
      $user = $query->row();

      if (!$user) {
         return FALSE;
      }

      if (!password_verify($password, $user->password)) {
         return FALSE;
      }

      $this->session->set_userdata([self::SESSION_KEY => $user->id]);
      $this->_update_last_login($user->id);

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

   public function logout()
   {
      $this->session->unset_userdata(self::SESSION_KEY);
      return !$this->session->has_userdata(self::SESSION_KEY);
   }

   private function _update_last_login($id)
   {
      $data = [
         'last_login' => date("Y-m-d H:i:s"),
      ];

      return $this->db->update($this->_table, $data, ['id' => $id]);
   }

   public function get($id)
   {
      $this->db->where('id', $id);
      $query = $this->db->get($this->_table);
      return $query->row();
   }

   public function create($nama, $username, $password)
   {
      $data = [
         'nama' => $nama,
         'username' => $username,
         'password' => password_hash($password, PASSWORD_DEFAULT),
      ];
      $this->db->insert($this->_table, $data);
   }

   public function edit($id, $nama, $username, $password)
   {
      $data = [
         'nama' => $nama,
         'username' => $username,

      ];

      if ($password) $data['password'] =  password_hash($password, PASSWORD_DEFAULT);

      $this->db->set($data);
      $this->db->where('id', $id);
      $this->db->update($this->_table);
   }

   public function delete($id)
   {
      $this->db->where('id', $id);
      $this->db->delete($this->_table);
   }

   public function update_data_diri($id, $nama, $username, $email, $no_hp, $alamat, $jk, $password = null)
   {
      $data = compact('nama', 'username', 'email', 'no_hp', 'alamat', 'jk');

      if ($password) $data['password'] =  password_hash($password, PASSWORD_DEFAULT);

      $this->db->set($data);
      $this->db->where('id', $id);
      $this->db->update($this->_table);
   }
}
