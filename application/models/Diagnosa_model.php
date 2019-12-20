<?php
class Diagnosa_model extends CI_model
{
  // Mengosongkan tabel tmp_gejala sebelum digunakan
  public function kosongTmpGejala()
  {
    return $this->db->truncate('tmp_gejala');
  }

  // mengosongkan tabel tmp_final sebelum digunakan
  public function kosongTmpFinal()
  {
    return  $this->db->truncate('tmp_final');
  }

  // memasukkan gejala terpilih ke tabel tmp_gejala
  public function insertTmpGejala()
  {
    $gejala = $this->input->post('id_gejala');
    $membernya = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $member = $membernya['id_user'];

    foreach ($gejala as $g) {
      $data = [
        'id_user' => $member,
        'id_gejala' => $g
      ];
      $this->db->insert('tmp_gejala', $data);
    }
  }

  // memasukkan ke tmp_final
  public function insertTmpFinal()
  {
    $query = "SELECT `tmp_gejala`.`id_gejala`,`tbl_pengetahuan`.`id_kerusakan`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_pengetahuan` JOIN `tmp_gejala` 
    ON `tmp_gejala`.`id_gejala` = `tbl_pengetahuan`.`id_gejala`";
    return $this->db->query($query)->result_array();
  }

  // Perhitungan tiap kerusakan
  // Perhitungan kerusakan 1
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK1()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_kerusakan', 1);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
    // Perhitungan hasil bayes kerusakan 1
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_kerusakan');
    $this->db->where('id_kerusakan', 1);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }

  // Perhitungan kerusakan 2
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK2()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_kerusakan', 2);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
    // Perhitungan hasil bayes kerusakan 2
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_kerusakan');
    $this->db->where('id_kerusakan', 2);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }

  // Perhitungan kerusakan 3
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK3()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_kerusakan', 3);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
    // Perhitungan hasil bayes kerusakan 3
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_kerusakan');
    $this->db->where('id_kerusakan', 3);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }

  // Perhitungan kerusakan 4
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK4()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_kerusakan', 4);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
    // Perhitungan hasil bayes kerusakan 4
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_kerusakan');
    $this->db->where('id_kerusakan', 4);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }

  // Perhitungan kerusakan 4
  // Perhitungan Probabilitas tiap kerusakan yang ada di tmp_final
  public function ProbK5()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_kerusakan', 5);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
    // Perhitungan hasil bayes kerusakan 5
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_kerusakan');
    $this->db->where('id_kerusakan', 5);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }
  // End Perhitungan tiap kerusakan


  // Update Hasil Probabilitas pada tmp_final
  public function hasilProbK1($K1)
  {
    $hasilK1 = ['hasil_probabilitas' => $K1];
    $this->db->where('id_kerusakan', 1);
    $this->db->update('tmp_final', $hasilK1);
  }
  public function hasilProbK2($K2)
  {
    $hasilK2 = ['hasil_probabilitas' => $K2];
    $this->db->where('id_kerusakan', 2);
    $this->db->update('tmp_final', $hasilK2);
  }
  public function hasilProbK3($K3)
  {
    $hasilK3 = ['hasil_probabilitas' => $K3];
    $this->db->where('id_kerusakan', 3);
    $this->db->update('tmp_final', $hasilK3);
  }
  public function hasilProbK4($K4)
  {
    $hasilK4 = ['hasil_probabilitas' => $K4];
    $this->db->where('id_kerusakan', 4);
    $this->db->update('tmp_final', $hasilK4);
  }
  public function hasilProbK5($K5)
  {
    $hasilK5 = ['hasil_probabilitas' => $K5];
    $this->db->where('id_kerusakan', 5);
    $this->db->update('tmp_final', $hasilK5);
  }
  // End Update Hasil Probabilitas pada tmp_final


  // Menampilkan Hasil diagnosa 

  // (Mendapatkan 3 Kerusakan dengan probabilitas yang terbesar)
  public function diagnosa()
  {
    $query = "SELECT DISTINCT `id_kerusakan`,`hasil_probabilitas` 
    FROM `tmp_final`
    ORDER BY `tmp_final`.`hasil_probabilitas` DESC LIMIT 3";
    return $this->db->query($query)->result_array();
  }

  // Mendapatkan 1 kerusakan dengan probabilitas terbesar
  public function tertinggi()
  {
    $query = "SELECT `id_kerusakan`, MAX(`hasil_probabilitas`) FROM `tmp_final` GROUP BY `id_kerusakan` ORDER BY `hasil_probabilitas` DESC LIMIT 1";
    return $this->db->query($query)->result_array();
  }

  // Menampilkan Detail Hasil Akhir Diagnosa
  public function detailDiagnosa()
  {
    $query = "SELECT `tmp_final`.`id_kerusakan`, MAX(`hasil_probabilitas`) as `hasil_probabilitas`,`tbl_kerusakan`.`nama_kerusakan`, `tbl_kerusakan`.`gambar`,`tbl_kerusakan`.`solusi` FROM `tmp_final` JOIN `tbl_kerusakan` ON `tmp_final`.`id_kerusakan` = `tbl_kerusakan`.`id_kerusakan` GROUP BY `id_kerusakan` ORDER BY `hasil_probabilitas` DESC LIMIT 1";
    return $this->db->query($query)->result_array();
  }
  // End Menampilkan Hasil diagnosa 

  // Memasukkan hasil diagnosa ke tbl_hasil_diagnosa
  public function insertHasil()
  {
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('username', $this->session->userdata('username'));
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $nama = $row->nama_user;
    }
    $kerusakan = $this->detailDiagnosa();
    foreach ($kerusakan as $k) {
      $kerusakannya = $k['nama_kerusakan'];
      $nilai = floor($k['hasil_probabilitas'] * 100);
      $solusi = $k['solusi'];
    }
    $data = [
      'hasil_probabilitas' => $nilai,
      'nama_kerusakan' => $kerusakannya,
      'nama_user' => $nama,
      'solusi' => $solusi,
      'waktu' => time()
    ];
    return $this->db->insert('tbl_hasil_diagnosa', $data);
  }
}
