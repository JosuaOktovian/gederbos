<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pelanggan extends CI_Model
{
    //Querydatabase ambil data
    public function getDataPelanggan()
    {
        $this->db->select('*');
        $this->db->from('tb_pelanggan');
        $query = $this->db->get();
        return $query->result();
    }

    //query database insert data mobil
    public function InsertDataPelanggan($data)
    {
        $this->db->insert('tb_pelanggan', $data);
    }

    //query database edit data mobil
    public function EditDataPelanggan($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_pelanggan', $data);
    }

    //query database get detail untuk form edit
    public function getDataPelangganDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_pelanggan');
        return $query->row();
    }

    //query database delete
    public function DeletePelanggan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_pelanggan');
    }
}
