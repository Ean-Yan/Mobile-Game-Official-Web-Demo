<?php
    include_once 'php/signup.php';
?>

<html>
<head>
    <title>Registration</title>
    <link rel="shortcut icon" href="img/longmenLogo.jpeg" />
    <link rel="stylesheet" href="CSS/ark-register.css" />
    <script src="JQuery/jquery-3.4.1.js"></script>
    <script src="./jsFiles/registrations.js"></script>
    <meta charset="utf-8" />
</head>

<body onload="createCode()">
    <div class="container" id="showAll">
        <!--Logo img-->
        <div class="logo"><img style="width: 100%;height: 100%" src="img/Logo.png" /></div>
        <!--Main form-->
        <div class="contents">
            <!--Error bar-->
            <div class="errorBar">
                <p id="errorId">&nbsp;</p>
            </div>
            <!--Form chart-->
            <form id="registration-form" action="php/signup.php" method="POST" onsubmit="return checkSubmit()">
                <!--Username input-->
                <div class="inputBox">
                    <input type="text" class="Inputs" id="usernameId" name="Uname"
                        placeholder="Username (no special symbols)" onblur="checkUname()" />
                </div>
                <!--Password input-->
                <div class="inputBox">
                    <input type="password" class="Inputs" id="passwordId" name="Pname"
                        placeholder="Password (4-10 letters or nums)" onblur="checkPsw()" />
                </div>
                <!--Password confirm-->
                <div class="inputBox">
                    <input type="password" class="Inputs" id="password2Id" name="Pname2" placeholder="Comfirm Password"
                        onblur="checkPsw2()" />
                </div>
                <!--Confirmation code-->
                <div class="inputBox">
                    <input type="text" style="width: 195px" class="Inputs" id="codes" placeholder="4-digits"
                        onblur="checkCode()" />
                    <input type="button" style="width: 197px" class="btns" id="codeBtn" value=""
                        onclick="createCode()" />
                </div>

                <!--checkBox and register btn-->
                <div id="submitBtn" style="margin-top: 10px; color: aliceblue;">
                    <input type="checkbox" id="checkId" style="margin-bottom: 15px;" name="agree-check" value="1"
                        onclick="checkAgree()" />
                    I have read the registration <a class="urls" href="">contract</a> and <a class="urls"
                        href="">policy</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;<br />
                    <input type="submit" class="btns" value="Register" name="submitBtn" id="submitBtn" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>