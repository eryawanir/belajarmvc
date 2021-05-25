<?php

class Mahasiswa extends Controller
{
    public $judul = __CLASS__;
    public function index()
    {
        $this->view('templates/header');
        $this->view('mahasiswa/index');
        $this->view('templates/footer');
    }
}
