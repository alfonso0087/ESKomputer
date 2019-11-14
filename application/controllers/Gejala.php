<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('nama_admin')) {
      redirect('auth/blocked');
    }
    $this->load->model('Gejala_model', 'MG');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = 'Halaman Gejala';
    $data['tabel'] = 'Data Gejala';

    $data['user'] = $this->db->get_where('tbl_admin', [
      'nama_admin' => $this->session->userdata('nama_admin')
    ])->row_array();
    $data['gejala'] = $this->MG->getAllGejala();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_sidebar', $data);
    $this->load->view('templates/admin_topbar');
    $this->load->view('admin/gejala/index', $data);
    $this->load->view('templates/admin_footer');
    $this->load->view('admin/gejala/modal_tambah');
    $this->load->view('admin/gejala/modal_ubah');
  }

  public function tambah()
  {
    $data['judul'] = 'Halaman Gejala';
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar', $data);
      $this->load->view('templates/admin_topbar');
      $this->load->view('admin/gejala/index', $data);
      $this->load->view('templates/admin_footer');
      $this->load->view('admin/gejala/modal_tambah');
      $this->load->view('admin/gejala/modal_ubah');
    } else {
      $this->MG->tambahGejala();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Gejala Berhasil ditambahkan!</div>'); //buat pesan akun berhasil dibuat
      redirect('gejala');
    }
  }

  public function ubah()
  {
    $this->MG->ubahGejala();
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Gejala Berhasil diubah!</div>'); //buat pesan akun berhasil dibuat
    redirect('gejala');
  }

  public function hapus($id)
  {
    $this->MG->hapusGejala($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gejala Berhasil dihapus!</div>'); //buat pesan akun berhasil dibuat
    redirect('gejala');
  }
}
