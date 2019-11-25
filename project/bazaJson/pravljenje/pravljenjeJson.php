<?php

require "bazaKonekcija.php"; # zahtevamo konekciju sa sql bazom 

$sql = "SELECT * FROM istaknuto"; # upit za sql bazu

# ispitujemo da li je uspesna konekcija sa bazom (promenljiva $konekcija se nalazi u bazaKonekcija.php)
if (!$baza = $konekcija->query($sql)){
    $json = '{ "greska": "Neuspesno povezivanje."}'; # ako je povezivanje neuspesno error zapisujemo
}

else{
    # promenljiva u kojoj cuvamo podatke iz baze
    $json = '{ "istaknuto": ';
    $jsonNiz = array(); #php ne moze direktno da cita sql pa pravimo niz

    while ($red = $baza->fetch_object()){
        $jsonNiz[] = $red; # dodajemo elemente baze u niz
    }

    $json .= json_encode($jsonNiz); # glavnoj json promenljivoj dodajemo sve elemente baze (.= sluzi za dodavanje stringa ekvivalentno je kao += za int)
    $json .= '}'; # zatvaramo json
}

#provervamo da li je fajl otvoren
if ($jsonFajl = fopen("jsonIzBaze.json", "w")){ 
    fwrite($jsonFajl, $json); #upisujemo podatke u fajl
    # zakomentarisati donju liniju
    fclose($jsonFajl); #zatvaramo
}
