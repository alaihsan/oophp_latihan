<?php

class Produk {
    public $judul = "abc";
    public $penulis = "ihsan";
    public $penerbit = "sansanCorp";
    public $harga = 10000;
    public $jmlHalaman;
    public $waktuMain;
    public $tipe;

public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman = 0,$waktuMain=0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }   

public function getLabel() {    
    return "$this->judul, $this->penerbit";

    }

public function getInfoLengkap() {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga
    })";

    if($this->tipe == "Komik") {
        $str .= " - {$this->jmlHalaman} Halaman";
    }

    else if ($this->tipe == "Game") {
        $str .= " - {$this->waktuMain} Jam.";
    }

    return $str;

}



}

class CetakInfoProduk {
    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Doraemon", "Ajinomoto", "Jepang Pounya", 15000, 100, 0, "Komik");
$produk2 = new Produk("Brave", "Pixar", "Pixar Studios",12500000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br/>";
echo $produk2->getInfoLengkap();