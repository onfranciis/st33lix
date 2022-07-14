$(document).ready(function(){
    $("#arkadas-istek-yolla").click(function() {
        $(this).css({'background': '#4caf5047', 'color': '#0000009c' });
    });
});

$(document).ready(function(){
    $("#profil-detay").click(function() {
        ProfilRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#profil-detay-box').fadeIn(200);
    });
    
    $( "#profil-gruplar" ).click(function() {
        ProfilRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#profil-grup-box').fadeIn(200);
    });
    
    
    function ProfilRemoveAll() {
    
        $('#profil-detay-box').fadeOut(200);
        $('#profil-grup-box').fadeOut(200);
    
        $('#profil-detay').css({'box-shadow': '', 'background': '' });
        $('#profil-gruplar').css({'box-shadow': '', 'background': '' });
    }
    
});