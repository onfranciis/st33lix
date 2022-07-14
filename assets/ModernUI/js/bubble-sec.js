
$(document).ready(function(){
    $(".bubble-sec").click(function() {
        small_odaButonRemoveAll();
        $(this).css({'filter': 'drop-shadow(2px 2px 0px rgba(255, 255, 255, 0.7)) drop-shadow(-2px -2px 0px rgba(255, 255, 255, 0.7)) drop-shadow(-2px 2px 0px rgba(255, 255, 255, 0.7)) drop-shadow(2px -2px 0px rgba(255, 255, 255, 0.7))' });
    });
    
    
    function small_odaButonRemoveAll() {
        $('.bubble-sec').css({'filter': '' });
    }
    
    });