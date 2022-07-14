$(document).ready(function(){
    $( "#grup-kimligi-ilerle" ).click(function() {
        MagazaRemoveAll();
    
        $('.grup-rozet-olustur').fadeIn(0);
    });
    
    $( "#grup-rozet-olustur-geri" ).click(function() {
        MagazaRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#magaza-menu-hayvanmobi').fadeIn(200);
    });
    
    
    function MagazaRemoveAll() {
    
        $('.grup-kimligi').fadeOut(0);
        $('.grup-rozet-olustur').fadeOut(0);
    
    
        $('#grup-kimligi-ilerle');
    }
    
    });
    