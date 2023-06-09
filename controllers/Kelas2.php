<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas2 extends CI_Controller
{

    public function index()
    {
        $data['k2'] = $this->gallery->k2()->result();
        $this->load->view("Temp/header");
        $this->load->view("vk2", $data);
        $this->load->view("Temp/footer");
    }
}
