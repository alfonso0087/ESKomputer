<?php

class Auth_model extends CI_model
{
  // buat akun
  public function registrasiAdmin()
  {
    $data = [
      'nama_user' => htmlspecialchars($this->input->post('nama', true)),
      'username' => htmlspecialchars($this->input->post('username', true)),
      'image' => 'default.jpg',
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'role_id' => 2,
      'date_created' => time()
    ];
    $this->db->insert('tbl_user', $data);
  }
}
