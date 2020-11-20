<?php
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);

    if (trim($login) == ""){
        $loginError = "login is empty";
        $_POST["loginError"] = "login is empty";
        // echo "login is empty";
        exit();
    }
    elseif (trim($password) == ""){
        $passwordError = "password is empty";
        // echo "password is empty";
        exit();
    }

    echo "working";

    $mysqli = new mysqli('localhost', 'root', 'root', 'dbusers');
    $mysqli->query("SET NAMES 'utf8'");
    
    $result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = MD5('$password') ");
    $user = $result->fetch_assoc();
    if (count($user) == 0){
        echo "user is not available";
        exit();
    }
    else 
        print_r($user);

    $mysqli->close();
    // header ('location: /');
    
?>


