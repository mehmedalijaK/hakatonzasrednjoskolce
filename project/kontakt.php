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
    <script src="kontakt.js"></script>
    <script>
        
        var myVar = localStorage['myKey'];

        if(myVar=="0"){
            $("#trTema").attr('href', "css/form.css");
            $('#sp1 span').text('Light');
            $('#sp2 span').text('Dark');
        }
        if(myVar=="1"){
            $("#trTema").attr('href', "css/formDark.css");
            $('#sp1 span').text('Dark');
            $('#sp2 span').text('Light');
        }



        if(myVar==null )myVar="0";

       

        $(document).ready(function(){
            $('#posalji').click(function() {
                let ime = $('#ime').val();
                let prezime = $('#prezime').val();
                let broj = $('#broj').val();
                let mejl = $('#mejl').val();
                let primedba = $('#primedba').val();

                alert(ime);
            });
        });


        

      
    
    
</script> 

</head>
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
                        <a class="nav-link" href="organizuj.php" id = "item">Organizuj Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id = "item">Kontakt</a>
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
            <span style="margin: 1em 0px">Ime: <span style="color: red">*</span></span>
                <input type="text" id="ime" class="form-control" placeholder="Ime">
            <span style="margin: 1em 0px">Prezime: <span style="color: red">*</span></span>
                <input type="text" id="prezime" class="form-control" placeholder="Prezime">
            <span style="margin: 1em 0px">Broj Telefona: <span style="color: red">*</span></span>
                <input type="text" id="broj" class="form-control" placeholder="Broj telefona">
            <span style="margin: 1em 0px">E-Mail: <span style="color: red">*</span></span>
                <input type="email" id="mejl" class="form-control" placeholder="E-Mail">
            <span style="margin: 1em 0px">Primedba: <span style="color: red">*</span></span>
                <textarea id="primedba" cols="40" rows="5" placeholder="Primedba" style="width: 100%; text-align: center;"></textarea>
            <span style="margin: 1em 0px">Oceni sajt: <span style="color: red">*</span></span>
            <form>
                <label class="radio-inline">
                    <input type="radio" name="optradio" checked value="1">  1 
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="2">  2 
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="3">  3 
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="4">  4 
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="5">  5
                </label>
            </form>
            <button id="posalji" class="btn btn-success" style="margin-top: 2em;"> Pošalji! </button>

        </div>
    </div>

    <script src="js/themeSwitch.js"></script>
    <script type="text/javascript" src="bootstrap/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>  
</body>
</html>