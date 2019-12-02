<?php

class Admin_model extends CI_model
{
  public function getAllProfile()
  {
    // menampilkan seluruh data admin yang ada di tabel admin.
    return $this->db->get('tbl_admin')->result_array();
  }
  public function CountGejala()
  {
    // Menghitung jumlah data dalam tabel gejala
    $query = $this->db->get('tbl_gejala');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  public function CountKerusakan()
  {
    // Menghitung jumlah data dalam tabel kerusakan
    $query = $this->db->get('tbl_kerusakan');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function ubahAdmin()
  {
    $id = $this->input->post('id_admin');
    // Mengubah data admin
    $data = [
      "nama_admin" => $this->input->post('nama', true),
      "username" => $this->input->post('username', true)
    ];
    $this->db->where('id_admin', $id);
    $this->db->update('tbl_admin', $data);
  }
}
