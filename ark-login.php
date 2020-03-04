<?php
    include_once 'php/connect.php';
    $_SESSION['successful'] = false;
    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $myusername = mysqli_real_escape_string($conn,$_POST['Uname']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['Pname']);

        $sql = "SELECT user_id FROM doctors WHERE user_name = '$myusername' and user_password = '$mypassword'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        // $active = $row['active'];

        $count = mysqli_num_rows($result);
        
        // select, if matches only one result, jumpt
        if($count == 1){
            $_SESSION['login_id'] = $myusername;
            $_SESSION['successful'] = true;
            header("location: index.php");
        }else{
            $error = "Invalid username or password";
            $_SESSION['login_id'] = "Log-inn";
        }
    }
?>
<html>
<head>
    <title>Registration</title>
    <link rel="shortcut icon" href="img/longmenLogo.jpeg" />
    <link rel="stylesheet" href="CSS/ark-login.css" />
    <script src="JQuery/jquery-3.4.1.js"></script>
    <meta charset="utf-8" />
</head>

<body>
    <div class="container" id="showAll">
        <!--Logo img-->
        <div class="logo"><img style="width: 100%;height: 100%" src="img/Logo.png" /></div>
        <!--Main form-->
        <div class="contents">
            <!--Error bar-->
            <div class="errorBar">
                <p id="errorId"><?php echo $error; ?>&nbsp;</p>
            </div>
            <!--Form chart-->
            <form id="login-form" action="" method="post" onsubmit="return checkSubmit()">
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

                <!--login btn-->
                <div id="submitBtn" style="margin-top: 10px; color: aliceblue;">
                    <input type="submit" class="btns" value="Login" name="submitBtn" id="submitBtn" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>