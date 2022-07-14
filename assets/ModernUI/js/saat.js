$(window).load(function(){
    $(document).ready(function() {
        var interval = setInterval(function() {
            var momentNow = moment();
            $('#saat-dakika').html(momentNow.format('HH:mm'));
        }, 100);
    });
});