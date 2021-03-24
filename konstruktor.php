<?php

class Produk {
    public $judul = "abc";
    public $penulis = "ihsan";
    public $penerbit = "sansanCorp";
    public $harga = 10000;
    public static $test = "test";

    public function __construct($judul, $penulis, $penerbit, $harga) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    self::$test;
    Produk::$test;
}

public function getLabel() {
    return "$this->judul, $this->penerbit", Produk::$test;
}


}

$produk1 = new Produk("Doraemon", "Ajinomoto", "Jepang Pounya", 15000);

$produk2 = new Produk("Brave", "Pixar", "Pixar Studios",12500000);

echo "komik : ".$produk1->getLabel();
echo "<br/>";
echo "Film : ".$produk2->getLabel();