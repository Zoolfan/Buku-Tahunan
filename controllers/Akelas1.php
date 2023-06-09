<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akelas1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['k1'] = $this->gallery->k1()->result_array();
        $this->load->view("admin/header");
        $this->load->view("admin/kelas1", $data);
        $this->load->view("admin/footer");
    }

    public function hapusK1()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->gallery->hapusK1($where);
        redirect('Akelas1');
    }
}
