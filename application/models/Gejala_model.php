<?php

class Gejala_model extends CI_model
{
  public function getAllGejala()
  {
    // menampilkan seluruh data gejala yang ada di tabel gejala.
    return $this->db->get('tbl_gejala')->result_array();
  }

  public function getGejalaById($id)
  {
    // menampilkan gejala berdasarkan id yang dipilih.
    return $this->db->get_where('tbl_gejala', ['id_gejala' => $id])->row_array();
  }

  public function KodeGejala()
  {
    // Membuat kode gejala menjadi generate AI (Auto Increment)
    $query = $this->db->query("select max(kode_gejala) as max_id from tbl_gejala");
    $rows = $query->row();
    $kode = $rows->max_id;
    $noUrut = (int) substr($kode, 1, 2);
    $noUrut++;
    $char = "G";
    $kode = $char . sprintf("%02s", $noUrut);
    return $kode;
  }


  public function tambahGejala()
  {
    $data = [
      'kode_gejala' => $this->KodeGejala(),
      "nama_gejala" => $this->input->post('nama', true),
      "tingkat_kepercayaan" => $this->input->post('cf_value', true)
    ];
    $this->db->insert('tbl_gejala', $data);

    // Tambah data gejala
    // $data = [
    //   "kode_gejala" => $this->input->post('kode', true),
    //   "nama_gejala" => $this->input->post('nama', true)
    // ];

    // $this->db->insert('tbl_gejala', $data);
  }

  public function ubahGejala()
  {
    $id = $this->input->post('kode_gejala');
    // Mengubah data gejala
    $data = [
      "nama_gejala" => $this->input->post('nama', true),
      "tingkat_kepercayaan" => $this->input->post('cf_value', true)
    ];
    $this->db->where('kode_gejala', $id);
    $this->db->update('tbl_gejala', $data);
  }

  public function hapusGejala($id)
  {
    // Hapus gejala berdasarkan id yang dipilih.
    $this->db->delete('tbl_gejala', ['kode_gejala' => $id]);
  }
}
