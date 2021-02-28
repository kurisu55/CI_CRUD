<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kelas Untuk data mahasiswa
 * 
 *@author Kristovel Adi Sucipto
 *@version 1.0, 25/02/2021
 */
class Welcome extends CI_Controller {
	/**
	 *@param fungsi construct untuk pemanggilan model mahasiswa dahulu
	*/
	public function __construct()
    {
		parent::__construct();
        $this->load->model('M_Mahasiswa');
    }
	
	/**
	 * @param pengambilan data mahasiswa di model mahasiswa pada view home
	 */
	public function index()
	{
		$recordMhs= $this->M_Mahasiswa->getDataMahasiswa();
		$DATA = array('data_mhs' =>$recordMhs);
		$this->load->view('home', $DATA);
	}
	
	/**
	 *@param fungsi untuk input data
	 */
	public function formInput()
	{
		$this->load->view('form_input');
	}
	
	/**
	 *@param fungsi untuk edit data
	*/
	public function formEdit($id) {
		$recordMhs=	$this->M_Mahasiswa->getDataMahasiswaDetail($id);
		$DATA=	array('data_mhs' =>$recordMhs);
		$this->load->view('form_edit', $DATA);
	}

	/**
	 *@param fungsi untuk aksi proses input data 
	 */
	public function Action_Input(){
		$npm=		$this->input->post('npm');
		$nama=		$this->input->post('nama');
		$kelas=		$this->input->post('kelas');
		$jurusan=	$this->input->post('jurusan');
		$kota=		$this->input->post('kota');

		$DataInput=	array(
			'npm'=>			$npm,
			'nama'=>		$nama,
			'kelas'=>		$kelas,
			'jurusan'=>		$jurusan,
			'kota'=>		$kota,
		);

		$this->M_Mahasiswa->DataInputMhs($DataInput);
		redirect (base_url('Welcome/'));
	}

	/**
	 *@param fungsi untuk aksi proses edit data
	*/
	public function Action_Edit(){
		$npm=		$this->input->post('npm');
		$nama=		$this->input->post('nama');
		$kelas=		$this->input->post('kelas');
		$jurusan=	$this->input->post('jurusan');
		$kota=		$this->input->post('kota');

		$DataUpdate= array(
			'nama'=>		$nama,
			'kelas'=>		$kelas,
			'jurusan'=>		$jurusan,
			'kota'=>		$kota,
		);

		$this->M_Mahasiswa->DataEditMhs($DataUpdate, $npm);
		redirect(base_url());
	}

	/**
	 *@param fungsi untuk aksi menghapus data
	*/
	public function Action_Delete($npm){
		$this->M_Mahasiswa->DataDeleteMhs($npm);
		redirect(base_url());
	}
}
