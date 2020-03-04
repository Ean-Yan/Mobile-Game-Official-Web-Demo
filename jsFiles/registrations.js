"use strict";
function checkUname() {
    var Uname = $("#usernameId").val();
    var Uborder = $("#usernameId");
    var errorText = $("#errorId");
    var reg = /^[a-zA-Z][a-zA-Z0-9]{3,15}$/; //rule
    if (Uname == "" || Uname == null) {
        Uborder.addClass("blured");
        errorText.html("Please enter a username");
        return false;
    }
    else if (reg.test(Uname.toString())) {
        Uborder.removeClass("blured");
        errorText.html("<p id='errorId'>&nbsp;</p>");
        return true;
    }
    else {
        Uborder.addClass("blured");
        errorText.html("<p id='errorId'>Incorrect username</p>");
        return false;
    }
}
function checkPsw() {
    var Psw = $("#passwordId").val();
    var Pborder = $("#passwordId");
    var errorText = $("#errorId");
    var reg = /^[a-zA-Z0-9]{4,10}$/; //rule
    if (Psw == "" || Psw == null) {
        Pborder.addClass("blured");
        errorText.html("<p id='errorId'>Empty password</p>");
        return false;
    }
    else if (reg.test(Psw.toString())) {
        Pborder.removeClass("blured");
        errorText.html("<p id='errorId'>&nbsp;</p>");
        checkPsw2();
        return true;
    }
    else {
        Pborder.addClass("blured");
        errorText.html("<p id='errorId'>Incorrect password</p>");
        return false;
    }
    checkPsw2();
}
function checkPsw2() {
    var Psw = $("#passwordId").val();
    var Psw2 = $("#password2Id").val();
    var Pborder = $("#password2Id");
    var errorText = $("#errorId");
    if (Psw == Psw2) {
        Pborder.removeClass("blured");
        errorText.html("<p id='errorId'>&nbsp;</p>");
        return true;
    }
    else {
        Pborder.addClass("blured");
        errorText.html("<p id='errorId'>Password doesn't match</p>");
        return false;
    }
}
function checkCode() {
    var currentCode = $("#codeBtn").val();
    var inputs = $("#codes").val();
    var cBorder = $("#codes");
    var errorText = $("#errorId");
    if (inputs == currentCode) {
        cBorder.removeClass("blured");
        errorText.html("<p id='errorId'>&nbsp;</p>");
        return true;
    }
    else {
        cBorder.addClass("blured");
        errorText.html("<p id='errorId'>code doesn't match</p>");
        return false;
    }
}
function checkAgree() {
    var ck = $("#checkId");
    var errorText = $("#errorId");
    if (ck.is(":checked")) {
        errorText.html("<p id='errorId'>&nbsp;</p>");
        return true;
    }
    else {
        errorText.html("<p id='errorId'>you need to fill up and agree to continue</p>");
        return false;
    }
}
function checkSubmit() {
    checkUname();
    checkPsw();
    checkPsw2();
    checkCode();
    checkAgree();
    return checkUname() && checkPsw() && checkPsw2() && checkCode() && checkAgree();
}
function createCode() {
    var code = Math.floor(Math.random() * 9000 + 1000); //four random numbers
    var span = $("#codeBtn");
    span.val(code);
}
