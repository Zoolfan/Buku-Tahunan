<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas1 extends CI_Controller
{

    public function index()
    {
        $data['k1'] = $this->gallery->k1()->result();
        $this->load->view("Temp/header");
        $this->load->view("vk1", $data);
        $this->load->view("Temp/footer");
    }
}
