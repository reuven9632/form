<?php
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);
    $name = htmlspecialchars($_POST["name"]);
    // $loginError = $_POST["loginError"];
    // $passwordError = $_POST["passwordError"];

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
    elseif (trim($name) == ""){
        $nameError = "name is empty";
        // echo "password is empty";
        exit();
    }

    $mysqli = new mysqli('localhost', 'root', 'root', 'dbusers');
    $mysqli->query("SET NAMES 'utf8'");

    $mysqli->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES ('$login', MD5('$password'), '$name')");
    $mysqli->close();
    header ('location: /');
    
?>