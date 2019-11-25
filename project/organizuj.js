$(document).ready(function(){
    $('#posalji').click(function() {
        // dodela vrednosti forme promenljivim
        let greska = 0;
        let ime = $('#ime').val();
        if (ime == ""){ greska = 1;}
        let datum = $('#datum').val();
        if (prezime == ""){ greska = 1;}
        let vreme = $("#vreme").val();
        let cena = $('#cena').val();
        if (broj == ""){ greska = 1;}
        let adresa = $('#adresa').val();
        if (adresa == ""){ greska = 1;}
        let vrsta = $('#vrsta').val();
        let opis = $('#opis').val();
        if (opis == ""){ greska = 1;}
        if (greska == 0){
            $.ajax({
                url: "organizujPhp.php",
                type: "GET",
                data: {
                    ime: ime,
                    datum: String(datum),
                    vreme: vreme,
                    cena: String(cena),
                    adresa: adresa,
                    vrsta: vrsta,
                    opis: opis,
                },
                success: function(data){
                    //alert("Poslato!");
                }
            });
        }
        else{
            alert("Greska u popunjavanju forme");
        }
    });
});