<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerusakan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cekLogin();
    $this->load->model('Kerusakan_model', 'kerusakan');
    $this->load->library('form_validation');
  }

  // Halaman Kerusakan
  public function index()
  {
    $data['judul'] = "Halaman Kerusakan";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $data['tbl_kerusakan'] = $this->kerusakan->getAllKerusakan();
    $data['kode'] = $this->kerusakan->KodeKerusakan();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_sidebar', $data);
    $this->load->view('templates/Admin_topbar');
    $this->load->view('admin/kerusakan/index', $data);
    $this->load->view('templates/Admin_footer');
    $this->load->view('admin/kerusakan/modal_tambah_kerusakan', $data);
    $this->load->view('admin/kerusakan/modal_ubah_kerusakan');
  }

  // Tambah Kerusakan
  public function tambah()
  {
    $data['tbl_kerusakan'] = $this->db->get('tbl_kerusakan')->result_array();
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // cek jika ada gambar yang akan diupload
    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image) {
      $config['allowed_types'] = 'jpg|png';
      $config['max_size']      = '4096';
      $config['upload_path'] = './assets/images/kerusakan/';

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('gambar')) {
        // $old_image = $data['tbl_kerusakan']['gambar'];
        // if ($old_image != 'user.png') {
        //   unlink(FCPATH . '/assets/images/kerusakan/' . $old_image);
        // }
        $new_image = $this->upload->data('file_name');
        $this->db->set('gambar', $new_image);
        // } else {
        //   echo $this->upload->dispay_errors();
        // }
      }
      $this->kerusakan->tambahKerusakan();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Kerusakan Berhasil ditambahkan!</div>'); //buat pesan akun berhasil dibuat
      redirect('kerusakan');
    }
  }

  // Ubah Kerusakan
  public function ubahkerusakan()
  {
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // cek jika ada gambar yang akan diupload
    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image) {
      $config['allowed_types'] = 'jpg|png';
      $config['max_size']      = '4096';
      $config['upload_path'] = './assets/images/kerusakan/';

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('gambar')) {
        // $old_image = $data['tbl_kerusakan']['gambar'];
        // if ($old_image != 'user.png') {
        //   unlink(FCPATH . '/assets/images/kerusakan/' . $old_image);
        // }
        $new_image = $this->upload->data('file_name');
        // var_dump($new_image);
        // die;
        $this->db->set('gambar', $new_image);
        // } else {
        //   echo $this->upload->dispay_errors();
        // }

        $this->kerusakan->ubahkerusakan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Data Kerusakan Berhasil diubah!</div>'); //buat pesan akun berhasil dibuat
        redirect('kerusakan');
      }
    }
  }

  // Hapus Kerusakan
  public function hapus($id)
  {
    $this->kerusakan->hapusKerusakan($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Kerusakan Berhasil dihapus!</div>'); //buat pesan akun berhasil dibuat
    redirect('kerusakan');
  }
}
