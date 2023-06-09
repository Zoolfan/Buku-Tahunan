<?php
defined('BASEPATH') or exit('No direct script access allowed');

class G_S extends CI_Controller
{

    public function index()
    {
        $data['gs'] = $this->gallery->g_s()->result();
        $this->load->view("Temp/header");
        $this->load->view("g_s", $data);
        $this->load->view("Temp/footer");
    }
}
