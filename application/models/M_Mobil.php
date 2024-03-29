<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Mobil extends CI_Model
{
    //Querydatabase ambil data
    public function getDataMobil()
    {
        $this->db->select('*');
        $this->db->from('tb_mobil');
        $query = $this->db->get();
        return $query->result();
    }

    //query database insert data mobil
    public function InsertDataMobil($data)
    {
        $this->db->insert('tb_mobil', $data);
    }

    //query database edit data mobil
    public function EditDataMobil($data, $id)
    {
        $this->db->where('varian', $id);
        $this->db->update('tb_mobil', $data);
    }

    //query database get detail untuk form edit
    public function getDataMobilDetail($id)
    {
        $this->db->where('varian', $id);
        $query = $this->db->get('tb_mobil');
        return $query->row();
    }
}
