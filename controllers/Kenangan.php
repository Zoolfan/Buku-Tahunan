<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kenangan extends CI_Controller
{

    public function index()
    {
        $this->load->view("Temp/header");
        $this->load->view("kenangan");
        $this->load->view("Temp/footer");
    }
}
