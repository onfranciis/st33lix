
$(document).ready(function(){
    $("#oda-begen-buton").click(function() {
        small_odaButonRemoveAll();
    
        $(this).css({'border-radius': '5px', 'background': 'linear-gradient(rgba(30, 114, 149, 0.84) 10%, rgba(20, 98, 130, 0.84) 10%)' });
        $('#').fadeIn(200);
    });
    
    $("#oda-ayarlar-buton").click(function() {
        small_odaButonRemoveAll();
    
        $(this).css({'border-radius': '5px', 'background': 'linear-gradient(rgba(30, 114, 149, 0.84) 10%, rgba(20, 98, 130, 0.84) 10%)' });
        $('#oda-bilgileri').fadeIn(200);
    });
    
    $("#oda-yardim-buton").click(function() {
        small_odaButonRemoveAll();
    
        $(this).css({'border-radius': '5px', 'background': 'linear-gradient(rgba(30, 114, 149, 0.84) 10%, rgba(20, 98, 130, 0.84) 10%)' });
        $('#').fadeIn(200);
    });
  
    $("#oda-fullScreen-buton").click(function() {
        small_odaButonRemoveAll();
    
        $(this).css({'border-radius': '5px', 'background': 'linear-gradient(rgba(30, 114, 149, 0.84) 10%, rgba(20, 98, 130, 0.84) 10%)' });
        $('#').fadeIn(200);
    });

    $("#oda-sohbet-buton").click(function() {
        small_odaButonRemoveAll();
    
        $(this).css({'border-radius': '5px', 'background': 'linear-gradient(rgba(30, 114, 149, 0.84) 10%, rgba(20, 98, 130, 0.84) 10%)' });
    });
    
    function small_odaButonRemoveAll() {
        $('#oda-begen-buton').css({'box-shadow': '', 'background': '' });
        $('#oda-ayarlar-buton').css({'box-shadow': '', 'background': '' });
        $('#oda-yardim-buton').css({'box-shadow': '', 'background': '' });
        $('#oda-fullScreen-buton').css({'box-shadow': '', 'background': '' });
        $('#oda-sohbet-buton').css({'box-shadow': '', 'background': '' });
    }
    
    });