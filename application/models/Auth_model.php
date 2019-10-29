<?php

class Auth_model extends CI_model
{
  public function registrasiAdmin()
  {
    $data = [
      'nama_admin' => htmlspecialchars($this->input->post('nama', true)),
      'username' => htmlspecialchars($this->input->post('username', true)),
      'image' => 'default.jpg',
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'date_created' => time()
    ];

    $this->db->insert('tbl_admin', $data);
  }
}
