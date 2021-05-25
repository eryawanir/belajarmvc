<?php 

class Mahasiswa_model {
    private $mhs = [
        [
            'nama' => 'Eryawan',
            'nrp' => '152016107',
            'email' => 'eryawan@gmail.com',
            'jurusan' => 'Teknik Informatika'
        ],
        [
            'nama' => 'Hasan bin Ali',
            'nrp' => '1420019',
            'email' => 'hasan@gmail.com',
            'jurusan' => 'Teknik Akhlaq'
        ],
        [
            'nama' => 'Husein bin Ali',
            'nrp' => '239911',
            'email' => 'husein@gmail.com',
            'jurusan' => 'Teknik Mesin'
        ]

    ];

    public function getAllMahasiswa(){
        return $this->mhs;
    }
}

?>