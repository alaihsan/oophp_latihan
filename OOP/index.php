<?php

include ('Murid.php');
include ('Kelas.php');

// $guru = new Guru();

$murid = new Murid();

$kelas = new Kelas();

var_dump ($kelas->listWaliKelas());

