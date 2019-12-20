<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cekLogin();
    $this->load->model('Gejala_model', 'MG');
    $this->load->library('form_validation');
  }

  // Halaman Gejala
  public function index()
  {
    $data['judul'] = 'Halaman Gejala';
    $data['tabel'] = 'Data Gejala';

    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $data['gejala'] = $this->MG->getAllGejala();
    $data['kode'] = $this->MG->KodeGejala();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_sidebar', $data);
    $this->load->view('templates/Admin_topbar');
    $this->load->view('admin/gejala/index', $data);
    $this->load->view('templates/Admin_footer');
    $this->load->view('admin/gejala/modal_ubah');
    $this->load->view('admin/gejala/modal_tambah', $data);
  }

  // Tambah Gejala
  public function tambah()
  {
    $data['judul'] = 'Halaman Gejala';
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/Admin_header', $data);
      $this->load->view('templates/Admin_sidebar', $data);
      $this->load->view('templates/Admin_topbar');
      $this->load->view('admin/gejala/index', $data);
      $this->load->view('templates/Admin_footer');
      $this->load->view('admin/gejala/modal_tambah');
      $this->load->view('admin/gejala/modal_ubah');
    } else {
      $this->MG->tambahGejala();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade in" role="alert">Data Gejala Berhasil ditambahkan!</div>'); //buat pesan akun berhasil dibuat
      redirect('gejala');
    }
  }

  // Ubah Gejala
  public function ubah()
  {
    $this->MG->ubahGejala();
    $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Data Gejala Berhasil diubah!</div>'); //buat pesan akun berhasil dibuat
    redirect('gejala');
  }

  //Hapus Gejala
  public function hapus($id)
  {
    $this->MG->hapusGejala($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gejala Berhasil dihapus!</div>'); //buat pesan akun berhasil dibuat
    redirect('gejala');
  }
}
