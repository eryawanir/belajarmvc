<?php
class Home extends Controller
{
    public $judul = __CLASS__;
    public function index()
    {
        $data['nama'] = $this->model('User_model')->getUser();

        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
