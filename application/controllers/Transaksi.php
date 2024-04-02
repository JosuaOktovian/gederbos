<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Transaksi');
        $this->load->model('M_Mobil');
        $this->load->model('M_Pelanggan');
    }

    public function index()
    {
        $DATA = array('data_transaksi' =>  $this->M_Transaksi->getDataTransaksi());

        $this->load->view('transaksi/home', $DATA);
    }

    public function getDataById($id)
    {
        //memasukkan data pada elemen input
        $DATA = array(
            'data_transaksi' =>  $this->M_Transaksi->getDataTransaksiDetail($id),
            'data_pelanggan' => $this->M_Pelanggan->getDataPelanggan(),
            'data_mobil' => $this->M_Mobil->getDataMobil(),
        );
        return $DATA;
    }

    public function formDetail($id)
    {
        //echo "<prev>";
        //echo print_r($id);
        //echo "</prev>";
        //memanggil data detail pelanggan
        //$recordPelanggan = $this->M_Pelanggan->getDataPelangganDetail($id);
        //memasukkan data pada elemen input
        //$DATA = array('data_pelanggan' => $recordPelanggan);
        $DATA = $this->getDataById($id);

        //panggilviewFormEdit
        $this->load->view('transaksi/form_view', $DATA);
    }

    public function formInput()
    {
        $DATA = array(
            'nama' => $this->M_Pelanggan->getDataPelanggan(),
            'mobil' => $this->M_Mobil->getDataMobil(),
        );

        //panggilviewFormInput
        $this->load->view('transaksi/form_input', $DATA);
    }
    public function InsertTransaksi()
    {
        //tangkap nilai form action dari Form Input
        // $nama = $this->input->post('nama');
        // $gender = $this->input->post('gender');
        // $alamat = $this->input->post('alamat');
        // $no_telpon = $this->input->post('no_telpon');

        //simpan data yg ditangkap ke dalam array
        $DataInsert = array(
            'pelanggan_id' => $this->input->post('pelanggan_id'),
            'mobil_id' => $this->input->post('pelanggan_id'),
            'total_hari_rental' => $this->input->post('total_hari_rental'),
            'total_harga' => $this->input->post('total_harga'),
        );

        //memanggil fungsi simpan data ke database pada model 
        $this->M_Transaksi->InsertDataTransaksi($DataInsert);

        //mengarahkan ke halaman selanjutnya ketika dijalankan
        redirect(base_url('Transaksi'));
    }
}
