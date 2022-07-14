$(document).ready(function(){
    $(".envanter-onizleme-tikla").click(function() {
        ETiklaRemoveAll();
        $(this).css({'background': '#ececec', 'border': 'solid 2px #ffffff', 'box-shadow': 'rgba(0, 0, 0, 0.04) 3px 3px 0px 0px' });
    });

    $(".takilan-rozet-onizleme").click(function() {
        ETiklaRemoveAll();
        $(this).css({'background': '#e0e0e0', 'border': 'solid 2px #ffffff', 'box-shadow': '3px 3px 0px 0px #0000000a' });
    });

    $("#e-mobilya").click(function() {
        EnvanterRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#envanter-mobilya-box').fadeIn(0);
    });
    
    $( "#e-hayvanlar" ).click(function() {
        EnvanterRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#envanter-hayvanlar-box').fadeIn(0);
    });
    
    $( "#e-kazanilanRozetler" ).click(function() {
        EnvanterRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#envanter-kazanilanRozetler-box').fadeIn(0);
    });
    
    $( "#e-robotlar" ).click(function() {
        EnvanterRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#envanter-robotlar-box').fadeIn(0);
    });
    
    
    function EnvanterRemoveAll() {
    
        $('#envanter-mobilya-box').fadeOut(0);
        $('#envanter-hayvanlar-box').fadeOut(0);
        $('#envanter-kazanilanRozetler-box').fadeOut(0);
        $('#envanter-robotlar-box').fadeOut(0);
    
        $('#e-mobilya').css({'box-shadow': '', 'background': '' });
        $('#e-hayvanlar').css({'box-shadow': '', 'background': '' });
        $('#e-kazanilanRozetler').css({'box-shadow': '', 'background': '' });
        $('#e-robotlar').css({'box-shadow': '', 'background': '' });
        $('.envanter-onizleme-tikla').css({'box-shadow': '', 'background': '', 'box-shadow': '' });

    }

    function ETiklaRemoveAll() {
        $('.envanter-onizleme-tikla').css({'background': '', 'border': '', 'box-shadow': '' });
        $('.takilan-rozet-onizleme').css({'background': '', 'border': '', 'box-shadow': '' });
    }

});
