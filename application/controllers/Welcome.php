<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	//method yg pertama kali dijalankan 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Mobil');
	}

	public function index()
	{
		//ambil data dari db
		$recordMobil = $this->M_Mobil->getDataMobil();

		//array tampung data yg diambil, data_mobil = keyArray
		$DATA = array('data_mobil' => $recordMobil);

		//panggilviewHome
		$this->load->view('home', $DATA); //$DATA = panggil arraydata

		//tes tampilkan data
		//echo "<prev>";
		//echo print_r($recordMobil);
		//echo "</prev>";
	}

	public function formInput()
	{
		//panggilviewFormInput
		$this->load->view('form_input');
	}

	public function formEdit($id)
	{
		//echo "<prev>";
		//echo print_r($id);
		//echo "</prev>";
		//memanggil data detail mobil
		$recordMobil = $this->M_Mobil->getDataMobilDetail($id);
		//memasukkan data pada elemen input
		$DATA = array('data_mobil' => $recordMobil);

		//panggilviewFormEdit
		$this->load->view('form_edit', $DATA);
	}

	public function formDetail($id)
	{
		//echo "<prev>";
		//echo print_r($id);
		//echo "</prev>";
		//memanggil data detail mobil
		$recordMobil = $this->M_Mobil->getDataMobilDetail($id);
		//memasukkan data pada elemen input
		$DATA = array('data_mobil' => $recordMobil);

		//panggilviewFormEdit
		$this->load->view('form_view', $DATA);
	}

	public function InsertMobil()
	{
		//tangkap nilai form action dari Form Input
		$merk = $this->input->post('merk');
		$varian = $this->input->post('varian');
		$jenis_bahan_bakar = $this->input->post('jenis_bahan_bakar');
		$jenis_kendaraan = $this->input->post('jenis_kendaraan');
		$transmisi = $this->input->post('transmisi');
		$kapasitas_mesin = $this->input->post('kapasitas_mesin');
		$tenaga = $this->input->post('tenaga');

		//simpan data yg ditangkap ke dalam array
		$DataInsert = array(
			'merk' => $merk,
			'varian' => $varian,
			'jenis_bahan_bakar' => $jenis_bahan_bakar,
			'jenis_kendaraan' => $jenis_kendaraan,
			'transmisi' => $transmisi,
			'kapasitas_mesin' => $kapasitas_mesin,
			'tenaga' => $tenaga,
		);

		//memanggil fungsi simpan data ke database pada model 
		$this->M_Mobil->InsertDataMobil($DataInsert);

		//mengarahkan ke halaman selanjutnya ketika dijalankan
		redirect(base_url('Welcome/index'));
	}

	public function EditMobil($id)
	{
		//ambil input update
		$merk = $this->input->post('merk');
		$varian = $this->input->post('varian');
		$jenis_bahan_bakar = $this->input->post('jenis_bahan_bakar');
		$jenis_kendaraan = $this->input->post('jenis_kendaraan');
		$transmisi = $this->input->post('transmisi');
		$kapasitas_mesin = $this->input->post('kapasitas_mesin');
		$tenaga = $this->input->post('tenaga');

		$DataUpdate = array(
			'merk' => $merk,
			'varian' => $varian,
			'jenis_bahan_bakar' => $jenis_bahan_bakar,
			'jenis_kendaraan' => $jenis_kendaraan,
			'transmisi' => $transmisi,
			'kapasitas_mesin' => $kapasitas_mesin,
			'tenaga' => $tenaga,
		);

		$this->M_Mobil->EditDataMobil($DataUpdate, $id);
		redirect(base_url());
	}

	public function DeleteMobil($id)
	{
		$this->M_Mobil->DeleteMobil($id);
		redirect(base_url());
	}
}
