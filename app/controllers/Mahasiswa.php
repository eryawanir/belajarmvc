<?php

class Mahasiswa extends Controller
{
    public $judul = __CLASS__;
    public function index()
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('templates/header');
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        $this->view('templates/header');
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
}
