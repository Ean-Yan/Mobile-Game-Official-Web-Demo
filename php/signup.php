<?php

    include_once 'connect.php';

    if( isset($_POST['Uname']) && isset($_POST['Pname']) && isset($_POST['Pname2'])){
        $username = $_POST['Uname'];
        $password = $_POST['Pname'];

        if(empty($username) || empty($password)){
            header("Location: ../signup.php?error=emptyfields=".$username."&password=".$password);
            exit();
        }

        $sql = "INSERT INTO `doctors`(`user_name`, `user_password`) VALUES ('$username','$password');";

        mysqli_query($conn,$sql);
        header("Location: ../ark-login.php");
    }

?>