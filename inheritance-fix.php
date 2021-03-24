<?php

class Produk {
    public $judul = "abc";
    public $penulis = "ihsan";
    public $penerbit = "sansanCorp";
    public $harga = 10000;
    public $jmlHalaman = "100 Halaman";
    public $waktuMain = "50 Jam";
    public $tipe 

public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }   

public function getLabel() {    
    return "$this->judul, $this->penerbit";

    }

class Komik extends Produk {
    public  $jmlHalaman = "100 Halaman",
            $tipe = "Komik";

    public function infoKomik() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga
        }) ~ {$this->jmlHalaman}";
        komik : Doraemon | Ajinomoto Jepang Pounya (Rp. 15.000) ~ 100 Halaman
    
        return $str;
    }

}

class Game extends Produk {
    public  $waktuMain = "50 Jam",
            $tipe = "Game";

    public function infoGame() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga
        }) ~ {$this->waktuMain}";
    
        return $str;
    }

}


$produk1 = new Komik("Doraemon", "Ajinomoto", "Jepang Pounya", 15000);
$produk2 = new Game("Brave", "Pixar", "Pixar Studios",12500000);

echo $produk1->infoKomik();
echo "<br/>";
echo $produk2->infoGame();