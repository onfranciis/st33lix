$(document).ready(function(){
$("#anasayfa").click(function() {
    MagazaRemoveAll();

    $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
    $('#magaza-menu-anasayfa').fadeIn(200);
});

$( ".magaza-haber" ).click(function() {
    MagazaRemoveAll();

    $('#mobi').css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
    $('#mobiAnasayfa').css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': '#f5f5f5db' });
    $('.bilgilendirme-magaza-box').fadeIn(200);
    $('#magaza-menu-mobi').fadeIn(200);
});


$( "#mobi" ).click(function() {
    MagazaRemoveAll();

    $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
    $('#mobiAnasayfa').css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': '#f5f5f5db' });
    $('.bilgilendirme-magaza-box').fadeIn(200);
    $('#magaza-menu-mobi').fadeIn(200);
});

$( "#hayvanmobi" ).click(function() {
    MagazaRemoveAll();

    $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
    $('#magaza-menu-hayvanmobi').fadeIn(200);
});

$( "#premium" ).click(function() {
    MagazaRemoveAll();

    $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
    $('#magaza-menu-premium').fadeIn(200);
});

$( "#personel" ).click(function() {
    MagazaRemoveAll();

    $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
    $('#magaza-menu-personel').fadeIn(200);
});

function MagazaRemoveAll() {

    $('#magaza-menu-anasayfa').fadeOut(200);
    $('#magaza-menu-mobi').fadeOut(200);
    $('#magaza-menu-hayvanmobi').fadeOut(200);
    $('#magaza-menu-premium').fadeOut(200);
    $('#magaza-menu-personel').fadeOut(200);

    $('#anasayfa').css({'box-shadow': '', 'background': '' });
    $('#mobi').css({'box-shadow': '', 'background': '' });
    $('#premium').css({'box-shadow': '', 'background': '' });
    $('#personel').css({'box-shadow': '', 'background': '' });
    $('#hayvanmobi').css({'box-shadow': '', 'background': '' });
}

});

//* Mağaza Mobi Menüleri *//
$(document).ready(function(){
    $(".liste-menu-box").click(function() {
        MagazaRemoveAll();
        $(".acilan-menu-listesi").css("display","none");
        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': '#f5f5f5db' });
    });


    $("#mobiAnasayfa").click(function() {
        $('.bilgilendirme-magaza-box').fadeIn(200);
    });

    $("#rozetVitrin").click(function() {
        $('.rozetVitrin-magaza-box').fadeIn(200);
    });

    $( "#habboGruplar" ).click(function() {
        $("#magaza-icerik-box").css("display","none");
        $('.grup-olustur-magaza-box').fadeIn(200);
    });
    
    $( "#grup-mobi" ).click(function() {
        $("#magaza-icerik-box").css("display","none");
        $('.grup-mobi-magaza-box').fadeIn(200);
    });

    $( "#habboMobiler" ).click(function() {
        $("#magaza-icerik-box").css("display","none");
        $('.mobiler-magaza-box').fadeIn(200);
    });

    function MagazaRemoveAll() {
        $('.bilgilendirme-magaza-box').fadeOut(200);
        $('.rozetVitrin-magaza-box').fadeOut(200);
        $('.grup-mobi-magaza-box').fadeOut(200);
        $('.grup-olustur-magaza-box').fadeOut(200);
        $('.mobiler-magaza-box').fadeOut(200);

        $('.liste-menu-box').css({'box-shadow': '', 'background': '' });
    }

});

 /* Ufak Liste Menü Active */
 $(document).ready(function(){
     $(".ufak-liste-menu-box").click(function() {
        ufaklisteAcRemoveAll();
        $(this).css({'background': '#ecf0f5' });
    });

    function ufaklisteAcRemoveAll() {
        $('.ufak-liste-menu-box').css({'background': ''});
    }
 });
    
 

 /* Mağaza Ufak Menü JS */
 var dongu1_count = 0;
 $(document).ready(function(){
    $( "#mobiLBanka" ).click(function() {
        dongu1_count++;
        $('#mobiLBanka-menu').toggle(0);
        if(dongu1_count % 2 == 0){
        }else{
        }
    });
});

var dongu2_count = 0;
$(document).ready(function(){
    $( "#mobiTMobi" ).click(function() {
        dongu2_count++;
        $('#habboMobiler-menu').toggle(0);
        if(dongu2_count % 2 == 0){
        }else{
        }
    });
});

var dongu3_count = 0;
$(document).ready(function(){
    $( "#grup-olustur" ).click(function() {
        dongu3_count++;
        $('#grup-menu-liste').toggle(0);
        if(dongu3_count % 2 == 0){
        }else{
        }
    });
});
