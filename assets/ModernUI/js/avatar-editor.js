/* Avatar Editor Menü */
$(document).ready(function(){
    $("#facebody-menu").click(function() {
        menuAEditorRemoveAll();

        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('.avatareditor-body').fadeIn(200);
    });

    $("#head-menu").click(function() {
        menuAEditorRemoveAll();

        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('.avatareditor-head').fadeIn(200);
    });

    $("#torso-menu").click(function() {
        menuAEditorRemoveAll();

        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('.avatareditor-torso').fadeIn(200);
    });

    $("#legs-menu").click(function() {
        menuAEditorRemoveAll();

        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('.avatareditor-legs').fadeIn(200);
    });

    $("#wardrobe-menu").click(function() {
        menuAEditorRemoveAll();

        $(this).css({'box-shadow': 'inset -1px 3px 0px 0px #ffffff', 'background': 'linear-gradient(to bottom,#e3e3e3 50%,#dfdfdf 50%)' });
        $('.avatareditor-wardrobe').fadeIn(200);
    });

    function menuAEditorRemoveAll() {
        $('.avatareditor-body').fadeOut(200);
        $('.avatareditor-head').fadeOut(200);
        $('.avatareditor-torso').fadeOut(200);
        $('.avatareditor-legs').fadeOut(200);
        $('.avatareditor-wardrobe').fadeOut(200);

        $('#facebody-menu').css({'box-shadow': '', 'background': '' });
        $('#head-menu').css({'box-shadow': '', 'background': '' });
        $('#torso-menu').css({'box-shadow': '', 'background': '' });
        $('#legs-menu').css({'box-shadow': '', 'background': '' });
        $('#wardrobe-menu').css({'box-shadow': '', 'background': '' });
    }
});

/* Avatar Editor Alt Menü Liste */
$(document).ready(function(){
    $(".face_01").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/face_01_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.face_01-box').fadeIn(200);
    });
    $(".face_02").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/face_02_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.face_02-box').fadeIn(200);
    });
    $(".head_01").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/head_01_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.head_01-box').fadeIn(200);
    });
    $(".head_02").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/head_02_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.head_02-box').fadeIn(200);
    });
    $(".head_03").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/head_03_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.head_03-box').fadeIn(200);
    });
    $(".head_04").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/head_04_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.head_04-box').fadeIn(200);
    });
    $(".head_05").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/head_05_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.head_05-box').fadeIn(200);
    });
    $(".torso_01").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/torso_01_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.torso_01-box').fadeIn(200);
    });
    $(".torso_02").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/torso_02_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.torso_02-box').fadeIn(200);
    });
    $(".torso_03").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/torso_03_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.torso_03-box').fadeIn(200);
    });
    $(".torso_04").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/torso_04_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.torso_04-box').fadeIn(200);
    });
    $(".legs_01").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/legs_01_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.legs_01-box').fadeIn(200);
    });
    $(".legs_02").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/legs_02_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.legs_02-box').fadeIn(200);
    });
    $(".legs_03").click(function() {
        altMenuAEditorRemoveAll();

        $(this).css({'box-shadow': 'rgb(255, 255, 255) 0px 3px 0px 0px inset', 'background': 'url("./images/avatarEditor/legs_03_on.png") center center no-repeat rgba(245, 245, 245, 0.86)' });
        $('.legs_03-box').fadeIn(200);
    });

    function altMenuAEditorRemoveAll() {
        $('.face_01-box').fadeOut(200);
        $('.face_02-box').fadeOut(200);
        $('.head_01-box').fadeOut(200);
        $('.head_02-box').fadeOut(200);
        $('.head_03-box').fadeOut(200);
        $('.head_04-box').fadeOut(200);
        $('.head_05-box').fadeOut(200);
        $('.torso_01-box').fadeOut(200);
        $('.torso_02-box').fadeOut(200);
        $('.torso_03-box').fadeOut(200);
        $('.torso_04-box').fadeOut(200);
        $('.legs_01-box').fadeOut(200);
        $('.legs_02-box').fadeOut(200);
        $('.legs_03-box').fadeOut(200);

        $('.face_01').css({'box-shadow': '', 'background': '', });
        $('.face_02').css({'box-shadow': '', 'background': '', });
        $('.head_01').css({'box-shadow': '', 'background': '', });
        $('.head_02').css({'box-shadow': '', 'background': '', });
        $('.head_03').css({'box-shadow': '', 'background': '', });
        $('.head_04').css({'box-shadow': '', 'background': '', });
        $('.head_05').css({'box-shadow': '', 'background': '', });
        $('.torso_01').css({'box-shadow': '', 'background': '', });
        $('.torso_02').css({'box-shadow': '', 'background': '', });
        $('.torso_03').css({'box-shadow': '', 'background': '', });
        $('.torso_04').css({'box-shadow': '', 'background': '', });
        $('.legs_01').css({'box-shadow': '', 'background': '', });
        $('.legs_02').css({'box-shadow': '', 'background': '', });
        $('.legs_03').css({'box-shadow': '', 'background': '', });
    }
});

/* Avatar Editor Clothes Box */
$(document).ready(function(){
    $(".clothes-box").click(function() {
        menuClothesAEditorRemoveAll();

        $(this).css({'background': '#ececec', 'box-shadow': 'inset 0px 0px 0px 3px #96999f30', 'border': 'solid 2px #0000003d', });
    });

    function menuClothesAEditorRemoveAll() {
        $('.clothes-box').css({'background': '', 'box-shadow': '', 'border': '', });
    }
});

/* Avatar View Generic */
$(document).ready(function(){
    $(".avatar-view-generic").click(function() {
        aviewGenericRemoveAll();

        $(this).css({'filter': 'drop-shadow(1px 1px 0px rgba(210 210 210)) drop-shadow(-1px -1px 0px rgba(210 210 210)) drop-shadow(-1px 1px 0px rgba(210 210 210)) drop-shadow(1px -1px 0px rgba(210 210 210))', });
    });

    function aviewGenericRemoveAll() {
        $('.avatar-view-generic').css({'filter': '' });
    }
});


/* Primary Color Box */
$(document).ready(function(){
    $(".primary-clothes-color").click(function() {
        primaryColorRemoveAll();

        $(this).css({'box-shadow': 'inset 0px 0px 0px 2px #fff', 'background-image': 'url(/images/avatarEditor/clothes-color-active.png?0)' });
    });

    function primaryColorRemoveAll() {
        $('.primary-clothes-color').css({'box-shadow': '', 'background-image': '' });
    }
});

/* Secondary Color Box */
$(document).ready(function(){

    $(".secondary-clothes-color").click(function() {
        secondaryColorRemoveAll();

        $(this).css({'box-shadow': 'inset 0px 0px 0px 2px #fff', 'background-image': 'url(/images/avatarEditor/clothes-color-active.png?0)' });
    });

    function secondaryColorRemoveAll() {
        $('.secondary-clothes-color').css({'box-shadow': '', 'background-image': '' });
    }
});
