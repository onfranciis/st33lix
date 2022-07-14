$(document).ready(function(){
    $(".basari-rozet-box").click(function() {
        basariTiklaRemoveAll();
        $(this).css({'background': '#a7b6bd', 'border-top': 'solid 4px #7a8692', 'border-bottom': 'solid 4px #d8dbe4', 'border-radius': '5px 5px 0px 0px;', 'transition': '0.5s' });
    });

    function basariTiklaRemoveAll() {
        $('.secilen-basari-rozet-box').css({'background': '', 'border': '' });        $('.basari-rozet-box').css({'background': '', 'border-top': '', 'border-bottom': '', 'border-radius': '', 'transition': '' });
    }

});


$(document).ready(function(){
    $(".secilen-basari-rozet-box").click(function() {
        secilenBasariTiklaRemoveAll();
        $(this).css({'background': 'linear-gradient(to bottom, #ffdb7a 50%, #f3d175 50%)', 'border': 'solid 2px #c5993d' });
    });

    function secilenBasariTiklaRemoveAll() {
        $('.secilen-basari-rozet-box').css({'background': '', 'border': '' });
    }

});
