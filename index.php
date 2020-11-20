<?php include_once "php/title.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="php/title.php" type="text/html"> -->
    <title><?=$title?></title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,300,400,500,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <div class="forms">
            <form action="php/formAuthorization.php" classs="formAuthorization" method="post">
                <h2>FORM Authorization</h2>
                <label>
                    Enter your login
                    <input type="text" name="login" class="login" placeholder="login">
                </label>
                <div name=loginError style="color:red;"><?php $loginError?></div>
                <label>
                    Enter your password
                    <input type="password" name="password" placeholder="password">
                </label>
                <div name=passwordError style="color:red;"><?php $passwordError?></div>
                <button type="submit" class="login-btn"><span class="login-btn_span">L</span>ogin</button>
            </form>

            <form action="php/formRegistration.php" classs="formRegistration" method="post">
                <h2>FORM Registration</h2>
                <label>
                    Enter your name
                    <input type="text" name="name" class="name" placeholder="name">
                </label>
                <div name=nameError style="color:red;"><?php $nameError?></div>
                <label>
                    Enter your login
                    <input type="text" name="login" class="login" placeholder="login">
                </label>
                <div name=loginError style="color:red;"><?php $loginError?></div>
                <label>
                    Enter your password
                    <input type="password" name="password" placeholder="password">
                </label>
                <div name=passwordError style="color:red;"><?php $passwordError?></div>
                <button type="submit" class="send-btn">send</button>
            </form>
        </div>
    </div>

</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="js/main.js"></script> -->

</html>
<!-- <\?php include_once "php/footer.php"; ?> -->