<?php

if(isset($_GET['ime'])){
    $ime = $_GET['ime'];
    $prezime = $_GET['prezime'];
    $broj = $_GET['broj'];
    $mejl = $_GET['mejl'];
    $primedba = $_GET['primedba'];
    $ocena .= strval($_GET['ocena']); # pretvaramo u str da bi moglo da se doda

    # pravimo niz koji cemo enkodirati u json
    $jsonNiz = array(
        "ime" => $ime,
        "prezime" => $prezime,
        "broj" => $broj,
        "mejl" => $mejl,
        "primedba" => $primedba,
        "ocena" => $ocena
    );     
    $json .= json_encode($jsonNiz); # enkodujemo i dodljujemo sve $json-u    


    if(!filesize("kontaktJson.json")){
        $json = '{"kontakt": [';
        $json .= json_encode($jsonNiz);
        $json .= ']}';
    }
    else{
        $json = file_get_contents("kontaktJson.json");
        $json = substr($json, 0, -2);
        $json .= ",";
        //$json .= ",";
        $json .= json_encode($jsonNiz);
        $json .= ']}';
    }

    file_put_contents("kontaktJson.json", $json);

}
else{
    echo "Ne radi";
}