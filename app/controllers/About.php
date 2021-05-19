<?php
class About
{
    public function index($nama = null, $pekerjaan = null)
    {
        echo 'about/index<br>';
        echo "halo nama saya $nama, saya seorang $pekerjaan";
    }
}
