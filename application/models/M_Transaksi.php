<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Transaksi extends CI_Model
{

    public function getDataTransaksi()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id = tb_transaksi.pelanggan_id');
        $this->db->join('tb_mobil', 'tb_mobil.id = tb_transaksi.mobil_id');
        $query = $this->db->get();
        return $query->result();
    }

    //query database get detail untuk form edit
    public function getDataTransaksiDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_transaksi');
        return $query->row();
    }

    public function InsertDataTransaksi($data)
    {
        $this->db->insert('tb_transaksi', $data);
    }
}
