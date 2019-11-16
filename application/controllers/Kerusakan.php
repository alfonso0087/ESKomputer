<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerusakan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kerusakan_model', 'kerusakan');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = "Halaman Kerusakan";
    $data['user'] = $this->db->get_where('tbl_admin', [
      'nama_admin' => $this->session->userdata('nama_admin')
    ])->row_array();
    $data['tbl_kerusakan'] = $this->kerusakan->getAllKerusakan();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_sidebar', $data);
    $this->load->view('templates/admin_topbar');
    $this->load->view('admin/kerusakan/index', $data);
    $this->load->view('templates/admin_footer');
    $this->load->view('admin/kerusakan/modal_tambah_kerusakan');
    $this->load->view('admin/kerusakan/modal_ubah_kerusakan');
  }

  public function tambah()
  {
    $data['tbl_kerusakan'] = $this->db->get('tbl_kerusakan')->result_array();
    $data['user'] = $this->db->get_where('tbl_admin', [
      'nama_admin' => $this->session->userdata('nama_admin')
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

  public function ubahkerusakan()
  {
    $data['tbl_kerusakan'] = $this->db->get('tbl_kerusakan')->result_array();
    $data['user'] = $this->db->get_where('tbl_admin', [
      'nama_admin' => $this->session->userdata('nama_admin')
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
  public function hapus($id)
  {
    $this->kerusakan->hapusKerusakan($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Kerusakan Berhasil dihapus!</div>'); //buat pesan akun berhasil dibuat
    redirect('kerusakan');
  }
}