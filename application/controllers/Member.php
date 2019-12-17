<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Member_model', 'MM');
    $this->load->model('Diagnosa_model', 'DM');
  }
  public function index()
  {
    $data['judul'] = "Halaman Member";
    $data['user'] = $this->db->get_where('tbl_admin', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    $this->load->view('templates/Member_Header', $data);
    $this->load->view('member/index', $data);
    $this->load->view('templates/Member_Footer');
  }

  public function diagnosa()
  {
    $data['judul'] = "Daftar Gejala";
    $data['user'] = $this->db->get_where('tbl_admin', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $data['gejala'] = $this->MM->Gejala();

    $this->load->view('templates/Member_Header', $data);
    $this->load->view('member/diagnosa', $data);
    $this->load->view('templates/Member_Footer');
  }

  public function hasil_diagnosa()
  {
    $data['judul'] = "Halaman Hasil Diagnosa";
    $data['user'] = $this->db->get_where('tbl_admin', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // Hasil Diagnosa Akhir
    $data['diagnosa'] =  $this->DM->diagnosa();
    $data['tertinggi'] = $this->DM->tertinggi();
    $data['kerusakan'] = $this->db->get('tbl_kerusakan')->result_array();

    $this->load->view('templates/Hasil_Header', $data);
    $this->load->view('member/hasil_diagnosa', $data);
    $this->load->view('templates/Hasil_Footer');
  }
}
