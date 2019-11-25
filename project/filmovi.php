<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmovi</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link id="trTema" rel="stylesheet" href="css/event.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php require "bazaJson/pravljenje/pravljenjeJson.php"; ?>
</head>
<script>


        var myVar = localStorage['myKey'];

        if(myVar=="0"){
            $("#trTema").attr('href', "css/event.css");
        }
        if(myVar=="1"){
            $("#trTema").attr('href', "css/eventDark.css");
        }

        if(myVar==null )myVar="0";

        console.log(myVar);
    
        var imgSrc;
        $(document).ready(function(){
            
            $.ajax({
                url: 'http://api.openweathermap.org/data/2.5/weather?q=Belgrade&units=metric&appid=c3ffcf7ba3acf3b18243654ec896e7ea',
                success: (results)=>{
                    

                    $('.stepeni').text("Stepeni: " +Math.round(results.main.temp)+"°C");
                    $('.vlaznost').text("Vlažnost: " +results.main.humidity+"%");
                    $('.vetar').text("Vetar: " +results.wind.speed+"m/s");
                    imgSrc = 'http://openweathermap.org/img/w/' + results.weather[0].icon + ".png";
                    $('.imagev').attr('src', imgSrc);
                }        
            })
        })

</script> 

<body >

<?php
    $json = file_get_contents("filmovi.json"); # ucitavanje json fajla
    $jsonNiz = json_decode($json); # dekodiranje json-a u niz da bi php mogao da ga cita
    $nazivi = array();
    $datumi = array();
    $vremena = array();
    $cene = array();
    $adrese = array();
    $opisi = array();
    $slike = array();

    foreach($jsonNiz->filmovi as $e){
        array_push($nazivi, $e->naziv);
        array_push($datumi, $e->datum);
        array_push($vremena, $e->vreme);
        array_push($cene, $e->cena);
        array_push($adrese, $e->adresa);
        array_push($opisi, $e->opis);
        array_push($slike, $e->slikaPut);
    }
    ?>

    <div class="navbarglavni">
    <nav class="navbar navbar-expand-xl navbar-dark flex-top">
        <a class="navbar-brand" href="index.php" style="font-size: 26px; pointer-events: none;">MLADI DANAS<a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php" id = "item">Početna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="koncerti.php" id = "item" style="color: white;">Koncerti</a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href="pozoriste.php" id = "item">Pozorište</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="izlozbe.php" id = "item">Izložbe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id = "item">Filmovi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="organizuj.php" id = "item">Organizuj Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontakt.php" id = "item">Kontakt</a>
            </li>
            <li class="nav-item">  
                <a>          
                    <ul class="themeSwitcherc"id="themeSwitcher">
                        <li>
                            <span>dark</span>
                            <span>light</span>
                        </li>        
                    </ul>          
                </a>  
            </li>
          </ul>
        </div>
    </nav>   
    </div>
    
    <div class="arrange">
        <div class="left">
        <div id="tvojDogadjaj"></div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container-fluid">
                    <div class="resturant">
                        <img src=<?php echo $slike[0] ?> width: 192px; height: 192px;>
                        <ul class="description">
                            <li><h4><?php echo $nazivi[0] ?></46></li>
                            <li>Datum i vreme: <p class="pdatumvreme"></p><?php echo $datumi[1]; echo " "; echo $vremena[0]; ?></li>
                            <li>Cena: <p class="pcena"></p><?php echo $cene[0] ?></li>
                            <li>Adresa: <p class = "padresa"></p><?php echo $adrese[0] ?></li>
                        </ul>
                        <ul class = "description">
                            <li><h5 class = "pnaslovopis">OPIS</h5></li>
                            <li><p class = "popis"><?php echo $opisi[0] ?></p></li>
                        </ul>                       
                    </div>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container-fluid">
                    <div class="resturant">
                        <img src=<?php echo $slike[1] ?> width: 192px; height: 192px;>
                        <ul class="description">
                            <li><h4><?php echo $nazivi[1] ?></46></li>
                            <li>Datum i vreme: <p class="pdatumvreme"></p><?php echo $datumi[1]; echo " "; echo $vremena[1]; ?></li>
                            <li>Cena: <p class="pcena"></p><?php echo $cene[1] ?></li>
                            <li>Adresa: <p class = "padresa"></p><?php echo $adrese[1] ?></li>
                        </ul>
                        <ul class = "description">
                            <li><h5 class = "pnaslovopis">OPIS</h5></li>
                            <li><p class = "popis"><?php echo $opisi[1] ?></p></li>
                        </ul>                       
                    </div>
                </div>
            </div>
        </div>
    <div class="right">
        <div class="about">
            <h2 class="naslovvrste">FILMOVI</h2>
            <div class="vremenskaprognoza">
                    <h3 class="hprognoza">TRENUTNA VREMENSKA PROGNOZA</h2>
                    <img class="imagev" width="75px" height="75px">
                    <h3 class="stepeni">Stepeni: </h3>
                    <h3 class="vlaznost">Vlažnost: </h3>
                    <h3 class="vetar">Vetar: </h3>  
            </div>
            <h2>FILMOVI</h2>
        </div>
    </div>
  </div>

  <script type="text/javascript">
        "<?php
            if(filesize("organizujJson.json")){
                $json = file_get_contents("organizujJson.json");
                $jsonNiz = json_decode($json);
    
                foreach($jsonNiz->dogadjaji as $e){
                    if ($e->vrsta == "filmovi"){
                        ?>"
                        let div1 = document.createElement("div");
                            div1.classList.add("jumbotron");
                            div1.setAttribute("id", "div1");
                            document.getElementById('tvojDogadjaj').appendChild(div1);
                        let div2 = document.createElement("div");
                            div2.classList.add("container-fluid");
                        let div3 = document.createElement("div");
                            div3.classList.add("resturant");
                            div3.setAttribute("style", "background-color: green;");
                            div1.appendChild(div2);
                            div2.appendChild(div3);
                        let ul = document.createElement("ul");
                            ul.classList.add("description");
                        let ul2 = document.createElement("ul");
                            ul2.classList.add("description");
                        let li21 = document.createElement("li");
                        let li22 = document.createElement("li");
                        let h5 = document.createElement("h5");
                        let p = document.createElement("p");
                            h5.classList.add("pnaslovopis");
                            p.classList.add("popis")
                            h5.innerHTML = "OPIS"
                            p.innerHTML = "<?php echo $e->opis ?>"
                        li21.appendChild(h5);
                        li22.appendChild(p);
                        ul2.appendChild(li21);
                        ul2.appendChild(li22);
                        let liTvoj = document.createElement("li");
                        let li1 = document.createElement("li");
                        let h4 = document.createElement("h4");
                            h4.innerHTML = "<?php echo $e->ime; ?>"
                            li1.appendChild(h4);
                        let li2 = document.createElement("li");
                            li2.innerHTML = "Datum i vreme: " + "<?php echo $e->datum; echo " " ; echo $e->vreme; ?>";
                        let p1 = document.createElement("p");
                            p1.classList.add("pdatumvreme");
                            li2.appendChild(p1);
                        let li3 = document.createElement("li");
                        let p2 = document.createElement("p");
                            p2.classList.add("pcena");
                            li3.appendChild(p2)
                            li3.innerHTML = "Cena: " + "<?php echo $e->cena; ?>" ;
                        let li4 = document.createElement("li");
                        let p3 = document.createElement("p");
                            p3.classList.add("padresa");
                            li4.appendChild(p3);
                            li4.innerHTML = "Adresa: " + "<?php echo $e->adresa; ?>";
                        let btn = document.createElement("button");
                            btn.classList.add("btn-success");
                            btn.setAttribute("id", "posalji");
                            btn.setAttribute("onclick", "obrisati()");
                            btn.setAttribute("style", "background-color: red; margin-top: 2em; border: black 1px;");
                            btn.innerHTML = "obrisi";
                        //<button id="posalji" class="btn btn-success" style="margin-top: 2em;"> Pošalji! </button>
                            ul.appendChild(liTvoj);
                            ul.appendChild(li1);
                            ul.appendChild(li2);
                            ul.appendChild(li3);
                            ul.appendChild(li4);
                            //div3.appendChild(h3);
                            //div3.appendChild(br);
                            div3.appendChild(ul);
                            div3.appendChild(ul2);
                            ul.appendChild(btn);
                        "<?php

                    }
                }
            }

    ?>"

    function obrisati(){
        let e = document.getElementById('div1');
        let dete = e.lastElementChild;
        while (dete){
            e.removeChild(dete);
            dete = e.lastElementChild;
        }

        "<?php
        if(!filesize('organizujJson.json')){
            file_put_contents('organizujJson.json', '');
        }
        ?>"

    }
        
    </script>


  <footer class="footer1">
    <br>
    <div class="footer" style="color:white">© 2019 Copyright:
           
        <a href="www.mladidanas.com" style="color: white;"> MladiDanas.com</a>
                
    </div> 
    <br>        
    </footer>

    <script src="js/themeSwitch.js"></script>
    <script type="text/javascript" src="bootstrap/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>