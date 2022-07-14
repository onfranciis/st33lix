$(document).ready(function(){

    $("#onlineArkadaslarKapat").click(function() {
        $(this).hide();
        $("#onlineArkadaslarAc").show();
        $('.online-arkadaslar-listesi').hide(50);
    });

    $("#onlineArkadaslarAc").click(function() {
        $(this).hide();
        $("#onlineArkadaslarKapat").show();
        $('.online-arkadaslar-listesi').show(50);
    });

    $("#offlineArkadaslarKapat").click(function() {
        $(this).hide();
        $("#offlineArkadaslarAc").show();
        $('.offline-arkadaslar-listesi').hide(50);
    });

    $("#offlineArkadaslarAc").click(function() {
        $(this).hide();
        $("#offlineArkadaslarKapat").show();
        $('.offline-arkadaslar-listesi').show(50);
    });

});