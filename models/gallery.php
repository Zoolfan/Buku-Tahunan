<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gallery extends CI_MODEL
{
    /*  atau bisa ini : 
    public function get($table)
    {
    return $this->db->get($table);
    } 
    */

    public function k1()
    {
        return $this->db->get('kelas_1');
    }
    public function k2()
    {
        return $this->db->get('kelas_2');
    }
    public function g_s()
    {
        return $this->db->get('g&s');
    }

    public function hapusStaff($where = null)
    {
        $this->db->delete('g&s', $where);
    }

    public function hapusK1($where = null)
    {
        $this->db->delete('kelas_1', $where);
    }
    public function hapusK2($where = null)
    {
        $this->db->delete('kelas_2', $where);
    }
    public function simpank1($data = null)
    {
        $this->db->insert('kelas_1', $data);
    }
    public function simpank2($data = null)
    {
        $this->db->insert('kelas_2', $data);
    }
    public function updatek2($data = null, $where = null)
    {
        $this->db->update('kelas_2', $data, $where);
    }
    public function k2where($where)
    {
        return $this->db->get_where('kelas_2', $where);
    }
}
