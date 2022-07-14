$(document).ready(function(){

    $(".odalar-sekme-kucult").click(function() {
        $(this).hide();
        $(".odalar-sekme-ac").show();
        $('#herkeseAcikOdalar-liste').hide(100);
    });

    $(".odalar-sekme-ac").click(function() {
        $(this).hide();
        $(".odalar-sekme-kucult").show();
        $('#herkeseAcikOdalar-liste').show(100);
    });

    $("#resmi-odalar-button").click(function() {
        NavigatorRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#herkese-acik-odalar').fadeIn(200);
    });
    
    $("#tum-odalar-button").click(function() {
        NavigatorRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#tum-odalar').fadeIn(200);
    });
    
    $("#benim-odalarim-button").click(function() {
        NavigatorRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#benim-odalarim').fadeIn(200);
    });
    
    function NavigatorRemoveAll() {
    
       
        // Diger odalari gizle
        $('#herkese-acik-odalar').hide();
        $('#tum-odalar').hide();
        $('#benim-odalarim').hide();

        // Butonlarin aktifligini sil
        $('#resmi-odalar-button').css({'box-shadow': '', 'background': '' });
        $('#tum-odalar-button').css({'box-shadow': '', 'background': '' });
        $('#benim-odalarim-button').css({'box-shadow': '', 'background': '' });
    }
    
    });