<?php

class Kerusakan_model extends CI_model
{
  public function getAllKerusakan()
  {
    // menampilkan seluruh data kerusakan yang ada di tabel kerusakan.
    return $this->db->get('tbl_kerusakan')->result_array();
  }

  public function getKerusakanById($id)
  {
    // menampilkan kerusakan berdasarkan id yang dipilih.
    return $this->db->get_where('tbl_kerusakan', ['id_kerusakan' => $id])->row_array();
  }

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

  public function tambahKerusakan()
  {
    $data = [
      // Data yang ada di modal
      'kode_kerusakan' => $this->KodeKerusakan(),
      'nama_kerusakan' => $this->input->post('nama', true),
      'solusi' => $this->input->post('solusi', true)
    ];
    $this->db->insert('tbl_kerusakan', $data);
  }

  public function hapusKerusakan($id)
  {
    $this->db->delete('tbl_kerusakan', ['kode_kerusakan' => $id]);
  }

  public function ubahkerusakan()
  {
    $id = $this->input->post('kode_kerusakan');
    // Mengubah data gejala
    $data = [
      "kode_kerusakan" => $this->input->post('kode', true),
      "nama_kerusakan" => $this->input->post('nama', true),
      "solusi" => $this->input->post('solusi', true)
    ];
    $this->db->where('kode_kerusakan', $id);
    $this->db->update('tbl_kerusakan', $data);
  }
}
