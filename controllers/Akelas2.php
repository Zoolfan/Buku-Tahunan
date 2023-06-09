<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akelas2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['k2'] = $this->gallery->k2()->result_array();
        $this->load->view("admin/header");
        $this->load->view("admin/kelas2", $data);
        $this->load->view("admin/footer");
    }

    public function hapusK2()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->gallery->hapusK2($where);
        redirect('Akelas2');
    }

    public function TambahData()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nick' => $this->input->post('nick'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'quote' => $this->input->post('quote'),
        ];
        $this->gallery->simpank2($data);
        redirect('Akelas2');
    }

    public function UbahData()
    {
        $data['k2'] = $this->gallery->k2where(['id' => $this->uri->segment(3)])->result_array();
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
        $this->gallery->updatek2($data, ['id' => $this->uri->segment(3)]);
        redirect('Akelas2');
    }
}
