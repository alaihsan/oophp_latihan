<?php

class Produk {
    public $judul = "abc";
    public $penulis = "ihsan";
    public $penerbit = "sansanCorp";
    public $harga = 10000;

public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }   

public function getLabel() {
    return "$this->judul, $this->penerbit";
    }

}

class CetakInfoProduk {
    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Doraemon", "Ajinomoto", "Jepang Pounya", 15000);
$produk2 = new Produk("Brave", "Pixar", "Pixar Studios",12500000);

echo "komik : ".$produk1->getLabel();
echo "<br/>";
echo "Film : ".$produk2->getLabel();
echo "<br/>";

$infoproduk1 = new CetakInfoProduk();

echo $infoproduk1->cetak($produk1);