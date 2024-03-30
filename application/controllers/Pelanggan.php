<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pelanggan');
    }

    public function index()
    {
        //ambil data dari db
        $recordPelanggan = $this->M_Pelanggan->getDataPelanggan();

        //array tampung data yg diambil, data_pelanggan = keyArray
        $DATA = array('data_pelanggan' => $recordPelanggan);

        //panggilviewHome
        $this->load->view('pelanggan/home', $DATA); //$DATA = panggil arraydata

        //tes tampilkan data
        //echo "<prev>";
        //echo print_r($recordMobil);
        //echo "</prev>";
    }

    public function formInput()
    {
        //panggilviewFormInput
        $this->load->view('pelanggan/form_input');
    }

    //public function getDataById($id)
    //{
    //    $recordPelanggan = $this->M_Pelanggan->getDataPelangganDetail($id);
    //    //memasukkan data pada elemen input
    //    $DATA = array('data_pelanggan' => $recordPelanggan);
    //     return $DATA;
    //}

    public function formEdit($id)
    {
        //echo "<prev>";
        //echo print_r($id);
        //echo "</prev>";
        //memanggil data detail mobil
        $recordPelanggan = $this->M_Pelanggan->getDataPelangganDetail($id);
        //memasukkan data pada elemen input
        $DATA = array('data_pelanggan' => $recordPelanggan);

        //panggilviewFormEdit
        $this->load->view('Pelanggan/form_edit', $DATA);
    }

    public function formDetail($id)
    {
        //echo "<prev>";
        //echo print_r($id);
        //echo "</prev>";
        //memanggil data detail pelanggan
        $recordPelanggan = $this->M_Pelanggan->getDataPelangganDetail($id);
        //memasukkan data pada elemen input
        $DATA = array('data_pelanggan' => $recordPelanggan);

        //panggilviewFormEdit
        $this->load->view('pelanggan/form_view', $DATA);
    }

    public function InsertPelanggan()
    {
        //tangkap nilai form action dari Form Input
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $alamat = $this->input->post('alamat');
        $no_telpon = $this->input->post('no_telpon');

        //simpan data yg ditangkap ke dalam array
        $DataInsert = array(
            'nama' => $nama,
            'gender' => $gender,
            'alamat' => $alamat,
            'no_telpon' => $no_telpon,
        );

        //memanggil fungsi simpan data ke database pada model 
        $this->M_Pelanggan->InsertDataPelanggan($DataInsert);

        //mengarahkan ke halaman selanjutnya ketika dijalankan
        redirect(base_url('Pelanggan'));
    }

    public function EditPelanggan($id)
    {
        //ambil input update
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $alamat = $this->input->post('alamat');
        $no_telpon = $this->input->post('no_telpon');

        $DataUpdate = array(
            'nama' => $nama,
            'gender' => $gender,
            'alamat' => $alamat,
            'no_telpon' => $no_telpon,
        );

        $this->M_Pelanggan->EditDataPelanggan($DataUpdate, $id);
        redirect(base_url('Pelanggan'));
    }

    public function DeletePelanggan($id)
    {
        $this->M_Pelanggan->DeletePelanggan($id);
        redirect(base_url('Pelanggan'));
    }
}
