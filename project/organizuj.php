<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link id="trTema" rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="organizuj.js"></script>
  </head>
<script>

    var myVar = localStorage['myKey'];

    if(myVar=="0"){
        $("#trTema").attr('href', "css/form.css");

    }
    if(myVar=="1"){
        $("#trTema").attr('href', "css/formDark.css");

    }
    if(myVar==null )myVar="0";

    console.log(myVar);


</script> 
<body>

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
                <a class="nav-link" href="filmovi.php" id = "item">Filmovi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id = "item">Organizuj Event</a>
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
    
    <div class="container">
      <div class="posalji">
          <p>Naziv: <span style="color: red">*</span></p>
          <input type="text" id="ime" class="form-control" placeholder="Naziv dogadjaja">
          <p>Datum: <span style="color: red">*</span></p>
          <input type="date" id="datum" class="form-control" placeholder="Datum"> 
          <p>Vreme: <span style="color: red">*</span></p><span>Napisati PM ili AM posle brojeva</span>
          <input type="time" id="vreme" class="form-control" placeholder="Vreme"> 
          <p>Cena: <span style="color: red">*</span></p>
          <input type="number" id="cena" class="form-control" placeholder="Cena dogadjaja">
          <p>Adresa: <span style="color: red">*</span></p>
          <input type="text" id="adresa" class="form-control" placeholder="Adresa">
          <p>Vrsta dogadjaja: <span style="color: red">*</span></p>
          <div class="container">
              <div class="row">
                <div class="col-sm-3" style="margin-left: auto; margin-right:auto;">
                  <select class="form-control" id="vrsta">
                    <option value="koncert">Koncert</option>
                    <option value="filmovi">Filmovi</option>
                    <option value="izlozba">Izložba</option>
                    <option value="predstava">Predstava</option>
                  </select>
                </div>
              </div>
          </div>
          <p>Opis:</p>
            <textarea id="opis" cols="40" rows="5" placeholder="Opis dogadjaja" style="width: 100%; text-align: center;"></textarea>
          <button id="posalji" class="btn btn-success" style="margin-top: 2em;"> Pošalji! </button>
      </div>  






    
    
    <script src="js/themeSwitch.js"></script>
    <script type="text/javascript" src="bootstrap/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>