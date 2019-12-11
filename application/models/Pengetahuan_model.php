<?php

class Pengetahuan_model extends CI_model
{
  public function getAllPengetahuan()
  {
    // menampilkan seluruh data gejala yang ada di tabel gejala.
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
                        ";
    return $this->db->query($queryRule)->result_array();

    //return $this->db->get('tbl_pengetahuan')->result_array();
  }

  public function getAllGejala()
  {
    // menampilkan seluruh data gejala yang ada di tabel gejala.
    return $this->db->get('tbl_gejala')->result_array();
  }

  public function K01()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=1
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function K02()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=2
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function K03()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=3
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function K04()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=4
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function K05()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=5
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function K06()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=6
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function K07()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=7
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function K08()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=8
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function K09()
  {
    $queryRule = "SELECT `tbl_pengetahuan`.`id`,`tbl_kerusakan`.`kode_kerusakan`,`tbl_kerusakan`.`nama_kerusakan`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_kerusakan` JOIN `tbl_pengetahuan` 
    ON `tbl_kerusakan`.`id_kerusakan` = `tbl_pengetahuan`.`id_kerusakan`
    JOIN `tbl_gejala` 
    ON `tbl_pengetahuan`.`id_gejala` = `tbl_gejala`.`id_gejala`
    WHERE `tbl_pengetahuan`.`id_kerusakan`=9
                        ";
    return $this->db->query($queryRule)->result_array();
  }

  public function getAllKerusakan()
  {
    // menampilkan seluruh data kerusakan yang ada di tabel kerusakan.
    return $this->db->get('tbl_kerusakan')->result_array();
  }

  public function tambahPengetahuan()
  {
    $data = [
      "id_kerusakan" => $this->input->post('kerusakan', true,),
      "id_gejala" => $this->input->post('gejala'),
      "probabilitas" => $this->input->post('probabilitas')
    ];
    // var_dump($data);
    // die;
    $this->db->insert('tbl_pengetahuan', $data);
  }

  public function hapus($id)
  {
    // Hapus rule berdasarkan id
    $this->db->delete('tbl_pengetahuan', ['id' => $id]);
  }
}
