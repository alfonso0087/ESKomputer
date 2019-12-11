<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cekLogin();
    $this->load->model('Pengetahuan_model', 'MP');
  }

  public function index()
  {
    $data['judul'] = "Halaman Pengetahuan";
    $data['user'] = $this->db->get_where('tbl_admin', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    $data['gejala'] = $this->MP->getAllGejala();
    $data['kerusakan'] = $this->MP->getAllKerusakan();
    $data['pengetahuan'] = $this->MP->getAllPengetahuan();
    $data['rule1'] = $this->MP->K01();
    $data['rule2'] = $this->MP->K02();
    $data['rule3'] = $this->MP->K03();
    $data['rule4'] = $this->MP->K04();
    $data['rule5'] = $this->MP->K05();
    $data['rule6'] = $this->MP->K06();
    $data['rule7'] = $this->MP->K07();
    $data['rule8'] = $this->MP->K08();
    $data['rule9'] = $this->MP->K09();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_sidebar', $data);
    $this->load->view('templates/Admin_topbar');
    $this->load->view('admin/pengetahuan/index', $data);
    $this->load->view('templates/Admin_footer');
    $this->load->view('admin/pengetahuan/modal_tambah_pengetahuan', $data);
    $this->load->view('admin/pengetahuan/modal_ubah_pengetahuan', $data);
  }

  public function tambah()
  {
    $data['judul'] = 'Halaman Pengetahuan';
    $data['user'] = $this->db->get_where('tbl_admin', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    $this->MP->tambahPengetahuan();
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade in" role="alert">Data Pengetahuan Berhasil ditambahkan!</div>'); //buat pesan akun berhasil dibuat
    redirect('pengetahuan');
  }

  public function ubah()
  {
    $this->MP->ubahPengetahuan();
    //buat pesan Pengetahuan berhasil dibuat
    $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Data Pengetahuan Berhasil diubah!</div>');
    redirect('pengetahuan');
  }

  public function hapus($id)
  {
    $this->MP->hapus($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Pengetahuan Berhasil dihapus!</div>'); //buat pesan akun berhasil dibuat
    redirect('pengetahuan');
  }
}
