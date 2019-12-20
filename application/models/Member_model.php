<?php
class Member_model extends CI_model
{
  // menampilkan seluruh data gejala yang ada di tabel gejala.
  public function Gejala()
  {
    return $this->db->get('tbl_gejala')->result_array();
  }
}
