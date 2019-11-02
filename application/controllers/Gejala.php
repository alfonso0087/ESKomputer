<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Gejala_model');
  }

  public function index()
  {
    $data['judul'] = 'Halaman Gejala';
    $data['user'] = $this->db->get_where('tbl_admin', [
      'nama_admin' => $this->session->userdata('nama_admin')
    ])->row_array();
    $data['gejala'] = $this->Gejala_model->getAllGejala();


    // $data['gejala'] = $this->Gejala_model->getAllGejala();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_sidebar', $data);
    $this->load->view('templates/admin_topbar');
    $this->load->view('admin/gejala/index', $data);
    $this->load->view('templates/admin_footer');
  }
}
