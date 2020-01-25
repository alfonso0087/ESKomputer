<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cekLogin();
    // if (!$this->session->userdata('nama_admin')) {
    //   redirect('auth/blocked');
    // }
    $this->load->model('Admin_model', 'Adm');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = "Halaman Admin";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // Hitung jumlah data pada tabel Gejala/Kerusakan/Pengetahuan
    $data['totalGejala'] = $this->Adm->CountGejala();
    $data['totalKerusakan'] = $this->Adm->CountKerusakan();
    $data['totalPengetahuan'] = $this->Adm->CountPengetahuan();
    $data['totalLaporan'] = $this->Adm->CountLaporan();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_sidebar', $data);
    $this->load->view('templates/Admin_topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/Admin_footer');
  }

  public function profile()
  {
    $data['judul'] = "Halaman Profile Admin";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $data['profile'] = $this->Adm->getAllProfile();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_sidebar', $data);
    $this->load->view('templates/Admin_topbar', $data);
    $this->load->view('admin/profile/index', $data);
    $this->load->view('templates/Admin_footer');
    $this->load->view('admin/profile/modal_ubah_profile', $data);
  }

  public function ubahAdmin()
  {
    $data['tbl_admin'] = $this->db->get('tbl_user')->result_array();
    // $data['user'] = $this->db->get_where('tbl_admin', [
    //   'nama_admin' => $this->session->userdata('nama_admin')
    // ])->row_array();
    // cek jika ada gambar yang akan diupload
    $upload_image = $_FILES['gambar']['name'];
    //if ($upload_image) {
    $config['allowed_types'] = 'jpg|png';
    $config['max_size']      = 4096;
    $config['upload_path'] = './assets/images/';
    $this->load->library('upload', $config);
    $test = $this->upload->do_upload('gambar');
    // $old_image = $data['tbl_kerusakan']['gambar'];
    // if ($old_image != 'user.png') {
    //   unlink(FCPATH . '/assets/images/kerusakan/' . $old_image);
    // }
    $new_image = $this->upload->data('file_name');

    $this->db->set('image', $new_image);
    // } else {
    //   echo $this->upload->dispay_errors();
    // }

    $this->Adm->ubahAdmin();
    $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Data Admin Berhasil diubah!</div>'); //buat pesan akun berhasil dibuat
    redirect('Admin/Profile');
  }
}
