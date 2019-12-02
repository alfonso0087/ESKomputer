<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
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
}
