<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ubahk2 extends CI_Controller
{
    public function index()
    {
        $data['k2'] = $this->gallery->k2where(['id' => $this->uri->segment(2)])->result_array();
        $this->load->view("admin/header");
        $this->load->view("admin/ubahk2", $data);
        $this->load->view("admin/footer");


        $data = [
            'nama' => $this->input->post('nama'),
            'nick' => $this->input->post('nick'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'quote' => $this->input->post('quote'),
        ];
        $this->gallery->updatek2($data, ['id' => $this->uri->segment(2)]);
        redirect('Akelas2');
    }
}
