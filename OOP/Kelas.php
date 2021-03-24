<?php

include ('Guru.php');

class Kelas {
    public $id;
    public $nama_kelas; 

    public function listKelas() {
        return [
            1 => 'kelas A',
            2 => 'kelas B',
            3 => 'kelas C'
        ];
    }
    
    public function listWaliKelas() {

        $guru = new Guru();

        return $guru->listGuru();

    }
}


