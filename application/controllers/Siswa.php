<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller{

    private $table = 'data_siswa';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
    }

    public function index(){
        $data['title'] = "List Data Siswa";
        $data['data_siswa'] = $this->Siswa_model->getAll();
        $this->load->view('index', $data);
    }

    public function halaman_tambah(){
        $this->load->view('halaman_tambah');
    }

    public function fungsiTambah(){
        
        $nama_siswa = $this->input->post('nama_siswa');
        $nis = $this->input->post('nis');
        $kelas = $this->input->post('kelas');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');


        $data = array(
            'nama_siswa' => $nama_siswa,
            'nis' => $nis,
            'kelas' => $kelas,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,

        );

        $this->Siswa_model->insertDataSiswa($data);
        redirect(base_url(''));
    }
}











?>