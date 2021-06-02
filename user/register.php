
<?php
require 'user_controller.php';
$conn = conn();
if (isset($_POST["register"])){
    if (register($_POST) > 0){
            //Kalau berhasil
    } else {
        //Kalau gagal
        echo mysqli_error($conn);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <?php include "../templates/head.php"?>
    <link rel="stylesheet" href="../css/register.css">
    <title>Register</title>
</head>
<body>
    <?php include "../templates/navbar.php"?>
    <div class="registerUI">
        <div class="logoRegister">
            <a href="/frootie/index.php"><img src="/frootie/img/Frootie_Logo_Horizontal.png"></a>
        </div>
        <div class="registerForm">
        <form action="" method="POST">
            <ul>
                <li>
                    <h4>Email</h4>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <h4>Name</h4>
                    <input type="text" name="name" id="name">
                </li>
                <li>
                    <h4>Password</h4>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <h4>Confirm Password</h4>
                    <input type="password" name="passwordConfirm" id="passwordConfirm">
                </li>
                <li>
                    <input type="submit" name="login" value="Register">
                </li>
            </ul>
        </form>
        </div>
        <div class="linkRegister">
            <a href="/frootie/user/sign_in.php">Have an account already? Sign in here!</a>
        </div>
    </div>

    <?php include "../templates/footer.php" ?>

</body>
</html>