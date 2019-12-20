<?php

class Kerusakan_model extends CI_model
{
  public function KodeKerusakan()
  {
    // Membuat kode gejala menjadi generate AI (Auto Increment)
    $query = $this->db->query("select max(kode_kerusakan) as max_id from tbl_kerusakan");
    $rows = $query->row();
    $kode = $rows->max_id;
    $noUrut = (int) substr($kode, 1, 2);
    $noUrut++;
    $char = "K";
    $kode = $char . sprintf("%02s", $noUrut);
    return $kode;
  }

  // CRUD KERUSAKAN
  // menampilkan seluruh data kerusakan yang ada di tabel kerusakan.
  public function getAllKerusakan()
  {
    return $this->db->get('tbl_kerusakan')->result_array();
  }

  // Tambah data Kerusakan
  public function tambahKerusakan()
  {
    $data = [
      // Data yang ada di modal
      'kode_kerusakan' => $this->KodeKerusakan(),
      'nama_kerusakan' => $this->input->post('nama', true),
      'probabilitas' => $this->input->post('probabilitas', true),
      'solusi' => $this->input->post('solusi', true)
    ];
    $this->db->insert('tbl_kerusakan', $data);
  }

  // Ubah Data Kerusakan
  public function ubahkerusakan()
  {
    $id = $this->input->post('id');
    // Mengubah data gejala
    $data = [
      "kode_kerusakan" => $this->input->post('kode', true),
      "nama_kerusakan" => $this->input->post('nama', true),
      "probabilitas" => $this->input->post('probabilitas', true),
      "solusi" => $this->input->post('solusi', true)
    ];
    $this->db->where('id_kerusakan', $id);
    $this->db->update('tbl_kerusakan', $data);
  }

  // Hapus Data Kerusakan
  public function hapusKerusakan($id)
  {
    $this->db->delete('tbl_kerusakan', ['id_kerusakan' => $id]);
  }
  // END CRUD KERUSAKAN
}
