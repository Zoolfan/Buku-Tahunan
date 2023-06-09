<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['staff'] = $this->gallery->g_s()->result_array();
        $this->load->view("admin/header");
        $this->load->view("admin/staff", $data);
        $this->load->view("admin/footer");
    }

    public function hapusStaff()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->gallery->hapusStaff($where);
        redirect('staff');
    }
}
