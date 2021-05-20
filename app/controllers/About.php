<?php
class About extends Controller
{
    public function index($nama = null, $pekerjaan = null)
    {
        $this->view('about/index');
    }

    public function page()
    {
        $this->view('about/page');
    }
}
