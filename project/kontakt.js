$(document).ready(function(){
    $('#posalji').click(function() {

        // funckija koja prijavljuje gresku.
        function greskaFunk(vrsta){
            if (vrsta == "mejl"){
                alert("Greska u popunjavanju mejla.")
            }
            else{
                alert("Greska u popunjavanju forme.");
            }
        }

        // dodela vrednosti forme promenljivim
        let greska = 0;
        let ime = $('#ime').val();
        if (ime == ""){ greska = 1;}
        let prezime = $('#prezime').val();
        if (prezime == ""){ greska = 1;}
        let broj = $('#broj').val();
        if (broj == ""){ greska = 1;}
        let mejl = $('#mejl').val();
        if (mejl == ""){
            greska = 2;
            greskaFunk("mejl");
        }
        else{
            for (let i = 0; i < mejl.length; i++){
                if (mejl[i] == "@"){
                break;
                }
                if (i == mejl.length - 1){
                    greskaFunk("mejl");        
                    greska = 2;           
                }
            }
        }
        let primedba = $('#primedba').val();
        if (primedba == ""){ greska = 1;}
        
        let radio = document.getElementsByName('optradio');
        let ocena = 0;

        // provera koje je radiodugme kliknuto i dodela vrednosti
        for (let i = 0; i < radio.length; i++){ 
            if (radio[i].checked == true){
                ocena = radio[i].value;
                break;
            }
        }
        
        if (greska == 0){
            $.ajax({
                url: "kontaktPhp.php",   
                type: "GET",        
                data: {
                    ime: ime,
                    prezime: prezime,
                    broj: broj,
                    mejl: mejl,
                    primedba: primedba,
                    ocena: ocena,
                },
                success: function(data) {
                    alert("Poslato!");
                }  
            });
        }
        else if(greska == 1 && greska != 2){
            greskaFunk("greska");
        }
    });
});