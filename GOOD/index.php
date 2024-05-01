<?php
include_once 'IniClub.php';

// Membuat objek dari kelas IniClub menggunakan getInstance()
$insert = \IniClub::getInstance();
$insert->IniClub('Pelita Jaya', 'jakarta', 7);
var_dump($insert);

$insert1 = IniClub::getInstance();
$insert1->IniClub('SM Pertamina', 'jakarta', 2);
var_dump($insert1);

$insert2 = IniClub::getInstance();
$insert2->IniClub('Prawira Bandung', 'bandung', 4);
var_dump($insert2);

$insert3 = IniClub::getInstance();
$insert3->IniClub('Indonesia Patriots', 'semarang', 4);
var_dump($insert3);

$insert4 = IniClub::getInstance();
$insert4->IniClub('Hangtuah', 'bandung', 5,);
var_dump($insert4);

$insert5 = IniClub::getInstance();
$insert5->IniClub('Pacifik Caesar Surabaya', 'surabaya', 3);
var_dump($insert5);
?>