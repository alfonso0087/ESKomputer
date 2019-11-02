<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nama_admin')) {
            redirect('auth/blocked');
        }
    }

    public function index()
    {
        $data['judul'] = "Halaman Admin";
        $data['user'] = $this->db->get_where('tbl_admin', [
            'nama_admin' => $this->session->userdata('nama_admin')
        ])->row_array();
        $this->load->view('templates/Admin_header', $data);
        $this->load->view('templates/Admin_sidebar', $data);
        $this->load->view('templates/Admin_topbar', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/Admin_footer');
    }
}
