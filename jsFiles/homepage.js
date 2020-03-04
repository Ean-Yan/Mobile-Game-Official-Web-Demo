"use strict";
function dpdmenu() {
    $(".dropdown_content").toggle(320);
}
function dpdmenuLoseFocus() {
    $(".dropdown_content").slideUp(300);
}
//window as global variables 
$(function () {
    //toggled boolean
    window.dowload_link_open = false;
    window.pic_info_showed = false;
    //frame positions
    window.stoneframe = $("#stone-frame").position();
    window.cityframe = $("#city-frame").position();
    window.craftsframe = $("#crafts-frame").position();
    window.infectedframe = $("#infected-frame").position();
    window.bottleframe = $("#bottle-frame").position();
    window.rhodesframe = $("#rhodes-frame").position();
    //img positions
    window.stone = $(".stone-img").position();
    window.city = $(".city-img").position();
    window.crafts = $(".crafts-img").position();
    window.infected = $(".infected-img").position();
    window.bottle = $(".bottle-img").position();
    window.rhodes = $(".rhodes-img").position();
});
function dowload_slide_toggle() {
    if (window.dowload_link_open == false) {
        $(".goleft").animate({ "left": "-400px" }, 600);
        $(".goright").animate({ "left": "400px" }, 600);
    }
    else {
        $(".goleft").animate({ "left": "0px" }, 600);
        $(".goright").animate({ "left": "0px" }, 600);
    }
    window.dowload_link_open = !window.dowload_link_open;
}
//click on play
function playVideo() {
    var audioPlayer = $(".popVideo").get(0);
    audioPlayer.play();
}
function pauseVideo() {
    var audioPlayer = $(".popVideo").get(0);
    audioPlayer.pause();
}
//on mouse-move
function mouseon(event) {
    var x = Number((event.clientX - 965) * 0.015);
    var y = Number((event.clientY - 540) * 0.015);
    var x2 = Number((event.clientX + 965) * 0.02);
    var y2 = Number((event.clientY + 1920) * 0.02);
    //frame movement
    $("#stone-frame").animate({
        left: window.stoneframe.left - x,
        top: window.stoneframe.top - y
    }, 0);
    $("#city-frame").animate({
        left: window.cityframe.left - x,
        top: window.cityframe.top - y
    }, 0);
    $("#crafts-frame").animate({
        left: window.craftsframe.left - x,
        top: window.craftsframe.top - y
    }, 0);
    $("#infected-frame").animate({
        left: window.infectedframe.left - x,
        top: window.infectedframe.top - y
    }, 0);
    $("#bottle-frame").animate({
        left: window.bottleframe.left - x,
        top: window.bottleframe.top - y
    }, 0);
    $("#rhodes-frame").animate({
        left: window.rhodesframe.left - x,
        top: window.rhodesframe.top - y
    }, 0);
    //image movement
    $(".stone-img").animate({
        marginLeft: window.stone.left - x2 - 21,
        marginTop: window.stone.top - y2 - 21
    }, 4);
    $(".city-img").animate({
        marginLeft: window.city.left - x2 - 2,
        marginTop: window.city.top - y2 - 32
    }, 4);
    $(".crafts-img").animate({
        marginLeft: window.crafts.left - x2 + 59,
        marginTop: window.crafts.top - y2 - 101
    }, 4);
    $(".infected-img").animate({
        marginLeft: window.infected.left - x2 - 21,
        marginTop: window.infected.top - y2 - 1
    }, 4);
    $(".bottle-img").animate({
        marginLeft: window.bottle.left - x2 - 21,
        marginTop: window.bottle.top - y2 - 1
    }, 4);
    $(".rhodes-img").animate({
        marginLeft: window.rhodes.left - x2 - 31,
        marginTop: window.rhodes.top - y2 - 21
    }, 4);
}
function toggleInfo(pictureName) {
    $("#pic-info").val(pictureName);
    if (!window.pic_info_showed) {
        $("#pic-info").animate({ "top": "0px" }, 200);
    }
    else {
        $("#pic-info").animate({ "top": "40px" }, 200);
    }
    window.pic_info_showed = !window.pic_info_showed;
}
