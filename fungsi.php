<?php

class something {

    public $nama = "ihsan";
    public $alamat = "Bekasi";

    public function salam() {
        return "selamat malam, $this->nama..kamu tinggal di $this->alamat ya?";
    }
}

$sm = new something();

echo $sm->salam();
echo "<br/>";
echo "<hr/>";
echo "<br/>";

