<?php

$adresaHosta = "localhost";
$ime = "root";
$sifra = "";
$imeBaze = "hzs";
$konekcija = new mysqli($adresaHosta, $ime, $sifra, $imeBaze) or die("Konekcija neuspešna: %s\n". $konekcija->error);