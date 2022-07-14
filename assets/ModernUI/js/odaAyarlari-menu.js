$(document).ready(function(){

    $("#oy-temel-buton").click(function() {
        odaAyarlariRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#temel-ayar-box').fadeIn(200);
    });
    
    $("#oy-erisim-buton").click(function() {
        odaAyarlariRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#erisim-ayar-box').fadeIn(200);
    });
    
    $("#oy-haklar-buton").click(function() {
        odaAyarlariRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#haklar-ayar-box').fadeIn(200);
    });

    $("#oy-vip-buton").click(function() {
        odaAyarlariRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#vip-ayar-box').fadeIn(200);
    });

    $("#oy-yonet-buton").click(function() {
        odaAyarlariRemoveAll();
    
        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('#yonet-ayar-box').fadeIn(200);
    });
    
    function odaAyarlariRemoveAll() {
    
       
        // Diger odalari gizle
        $('#temel-ayar-box').hide();
        $('#erisim-ayar-box').hide();
        $('#haklar-ayar-box').hide();
        $('#vip-ayar-box').hide();
        $('#yonet-ayar-box').hide();

        // Butonlarin aktifligini sil
        $('#oy-temel-buton').css({'box-shadow': '', 'background': '' });
        $('#oy-erisim-buton').css({'box-shadow': '', 'background': '' });
        $('#oy-haklar-buton').css({'box-shadow': '', 'background': '' });
        $('#oy-vip-buton').css({'box-shadow': '', 'background': '' });
        $('#oy-yonet-buton').css({'box-shadow': '', 'background': '' });
    }
    
    });