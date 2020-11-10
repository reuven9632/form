<?php include_once "php/head.php"; ?>

    <div class="container">
        <div class="forms">
            <form action="php/formAuthorization.php" classs="formAuthorization" method="post">
                <h2>FORM Authorization</h2>
                <label>
                Enter your name
                    <input type="text" name="name">
                </label>
                <label>
                Enter your female
                    <input type="text" name="female">
                </label>
                <button type="submit" class="done-btn">done</button>
            </form>

            <form action="php/formRegistration.php" classs="formRegistration" method="post">
                <h2>FORM Registration</h2>
                <label>
                Enter your name
                    <input type="text" name="name">
                </label>
                <label>
                Enter your female
                    <input type="text" name="female">
                </label>
                <button type="submit" class="send-btn">send</button>
            </form>
        </div>
    </div>

<?php include_once "php/footer.php"; ?>
