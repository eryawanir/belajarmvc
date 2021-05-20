<?php
class About extends Controller
{
    public $judul = 'About';
    public function index($nama = null, $pekerjaan = null)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;

        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $this->view('about/page');
    }
}
