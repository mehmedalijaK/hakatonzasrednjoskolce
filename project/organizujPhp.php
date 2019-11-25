<?php

if(isset($_GET['ime'])){

    $ime = $_GET['ime'];
    $datum = $_GET['datum'];
    $vreme = $_GET['vreme'];
    $cena = $_GET['cena'];
    $adresa = $_GET['adresa'];
    $vrsta = $_GET['vrsta'];
    $opis = $_GET['opis'];
    $opis = str_replace(array('/', 'n'), '', $opis);

    $json = ""; 
    $jsonNiz = array(
        "ime" => $ime,
        "datum" => $datum,
        "vreme" => $vreme,
        "cena" => $cena,
        "adresa" => $adresa,
        "vrsta" => $vrsta,
        "opis" => $opis,
    );
    $json .= json_encode($jsonNiz);
    if(!filesize("organizujJson.json")){
        $json = '{"dogadjaji": [';
        $json .= json_encode($jsonNiz);
        $json .= ']}';
        file_put_contents("organizujJson.json", $json);
        echo "<script type='text/javascript'>alert('Poslato');</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Već imate događaj.');</script>";
    }

}
else{
    echo "Nije poslata slika.";
}