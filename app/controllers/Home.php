<?php
class Home extends Controller
{
    public $judul = __CLASS__;
    public function index()
    {
        $this->view('templates/header');
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
