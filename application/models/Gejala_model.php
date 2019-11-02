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

    public function tambahGejala()
    {
        // Tambah data gejala
        $data = [
            "kode_gejala" => $this->input->post('kode', true),
            "nama_gejala" => $this->input->post('nama', true)
        ];

        $this->db->insert('tbl_gejala', $data);
    }

    public function ubahGejala()
    {
        $id = $this->input->post('id_gejala');
        // Mengubah data gejala
        $data = [
            "kode_gejala" => $this->input->post('kode', true),
            "nama_gejala" => $this->input->post('nama', true)
        ];
        $this->db->where('id_gejala', $id);
        $this->db->update('tbl_gejala', $data);
    }

    public function hapusGejala($id)
    {
        // Hapus gejala berdasarkan id yang dipilih.
        $this->db->delete('tbl_gejala', ['id_gejala' => $id]);
    }
}
