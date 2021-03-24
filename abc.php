<?php

class Produk {
    public $judul = "abc";
    public $penulis = "ihsan";
    public $penerbit = "sansanCorp";
    public $harga = 10000;

public function getLabel() {
    return "$this->judul, $this->penerbit";
}


}

$produk1 = new Produk();
$produk1->judul = "Doraemon";
$produk1->penulis = "Ajinomoto";
$produk1->penerbit = "Jepang Pounya";
$produk1->harga = 15000;

$produk2 = new Produk();
$produk2->judul = "Brave";
$produk2->penulis = "Pixar";
$produk2->penerbit = "Pixar Studios";
$produk2->harga = 12500000;

echo "Komik Berjudul, $produk1->judul harganya adalah $produk1->harga";
echo "<br/>";
echo $produk1->getLabel();

echo "<hr/>";

echo "komik : ".$produk1->getLabel();
echo "<br/>";
echo "Film : ".$produk2->getLabel();