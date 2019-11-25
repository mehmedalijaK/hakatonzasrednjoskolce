$(document).ready(function(){
    $("#themeSwitcher").click(function(){    
        let s = $("#trTema").attr('href'); 
        $("#themeSwitcher").toggleClass("active");  

        if (s.includes('main.css')){        
            $("#trTema").attr('href', "css/darkTheme.css");
           
            localStorage['myKey'] = '1';
           
        }
        if (s.includes('event.css')){
            $('#trTema').attr('href', "css/eventDark.css");
            localStorage['myKey'] = '1';
            
        }
        if(s.includes('darkTheme.css')){
            $("#trTema").attr('href',"css/main.css");   
            localStorage['myKey'] = '0';   
           
        }
        if (s.includes('eventDark.css')){
            $('#trTema').attr('href', "css/event.css");
            localStorage['myKey'] = '0';
           
        }
        if (s.includes('formDark.css')){
            $('#trTema').attr('href', "css/form.css");
            localStorage['myKey'] = '0';
           
        }
        if (s.includes('form.css')){
            $('#trTema').attr('href', "css/formDark.css");
            localStorage['myKey'] = '1';
           
        }
    })
})