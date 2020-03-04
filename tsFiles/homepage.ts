function dpdmenu() {
    $(".dropdown_content").toggle(320);
}

function dpdmenuLoseFocus() {
    $(".dropdown_content").slideUp(300);
}

//window as global variables 
$(function(){
    //toggled boolean
    (<any>window).dowload_link_open=false;
    (<any>window).pic_info_showed=false;
    //frame positions
    (<any>window).stoneframe = $("#stone-frame").position();
    (<any>window).cityframe = $("#city-frame").position();
    (<any>window).craftsframe = $("#crafts-frame").position();
    (<any>window).infectedframe = $("#infected-frame").position();
    (<any>window).bottleframe = $("#bottle-frame").position();
    (<any>window).rhodesframe = $("#rhodes-frame").position();
    //img positions
    (<any>window).stone = $(".stone-img").position();
    (<any>window).city = $(".city-img").position();
    (<any>window).crafts = $(".crafts-img").position();
    (<any>window).infected = $(".infected-img").position();
    (<any>window).bottle = $(".bottle-img").position();
    (<any>window).rhodes = $(".rhodes-img").position();
})
function dowload_slide_toggle() {
    if((<any>window).dowload_link_open == false){
        $(".goleft").animate({"left":"-400px"},600);
        $(".goright").animate({"left":"400px"},600);
    }else{
        $(".goleft").animate({"left":"0px"},600);
        $(".goright").animate({"left":"0px"},600);
    }
    (<any>window).dowload_link_open = !(<any>window).dowload_link_open;
}

//click on play
function playVideo() {
    let audioPlayer = <HTMLVideoElement>$(".popVideo").get(0);
    audioPlayer.play(); 
}

function pauseVideo() {
    let audioPlayer =  <HTMLVideoElement>$(".popVideo").get(0);
    audioPlayer.pause();
}


//on mouse-move
function mouseon(event: { clientX: number; clientY: number; }) {
    var x = Number((event.clientX - 965) * 0.015);
    var y = Number((event.clientY - 540) * 0.015);
    
    var x2=Number((event.clientX+965) * 0.02);
    var y2=Number((event.clientY+1920) * 0.02);
    //frame movement
    $("#stone-frame").animate({
        left: (<any>window).stoneframe.left - x,
        top: (<any>window).stoneframe.top - y
    }, 0);
    $("#city-frame").animate({
        left: (<any>window).cityframe.left - x,
        top: (<any>window).cityframe.top - y
    }, 0);
    $("#crafts-frame").animate({
        left: (<any>window).craftsframe.left - x,
        top: (<any>window).craftsframe.top - y
    }, 0);
    $("#infected-frame").animate({
        left: (<any>window).infectedframe.left - x,
        top: (<any>window).infectedframe.top - y
    }, 0);
    $("#bottle-frame").animate({
        left: (<any>window).bottleframe.left - x,
        top: (<any>window).bottleframe.top - y
    }, 0);
    $("#rhodes-frame").animate({
        left: (<any>window).rhodesframe.left - x,
        top: (<any>window).rhodesframe.top - y
    }, 0);
    //image movement
    $(".stone-img").animate({
        marginLeft: (<any>window).stone.left - x2 -21,
        marginTop: (<any>window).stone.top - y2 - 21
    }, 4);
    $(".city-img").animate({
        marginLeft: (<any>window).city.left - x2 -2,
        marginTop: (<any>window).city.top - y2 -32
    },4);
    $(".crafts-img").animate({
        marginLeft: (<any>window).crafts.left - x2+59,
        marginTop: (<any>window).crafts.top - y2-101
    }, 4);
    $(".infected-img").animate({
        marginLeft: (<any>window).infected.left - x2 -21,
        marginTop: (<any>window).infected.top - y2 -1
    }, 4);
    $(".bottle-img").animate({
        marginLeft: (<any>window).bottle.left - x2 - 21,
        marginTop: (<any>window).bottle.top - y2 -1
    }, 4);
    $(".rhodes-img").animate({
        marginLeft: (<any>window).rhodes.left - x2 -31,
        marginTop: (<any>window).rhodes.top - y2 -21
    },4);
}

function toggleInfo(pictureName: string){
    $("#pic-info").val(pictureName);
    if(!(<any>window).pic_info_showed){
        $("#pic-info").animate({"top":"0px"},200);
    }else{
        $("#pic-info").animate({"top":"40px"},200);
    }
    (<any>window).pic_info_showed = !(<any>window).pic_info_showed;
}
