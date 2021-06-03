
<?php
require 'user_controller.php';
$conn = conn();
if (isset($_POST["register"])){
    if (register($_POST) > 0){
            //Kalau berhasil
            echo'<script>
                alert("Successfully registered your account! Login to access Frootie!")
            </script>';
            header("Location: http://localhost/user/sign_in.php");
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
<<<<<<< Updated upstream
                    <button type="submit" name="register">Register</button>
=======
                    <input type="submit" name="register" value="Register">
>>>>>>> Stashed changes
                </li>
                <a href="/frootie/user/sign_in.php">Have an account already? Sign in here!</a>
            </ul>
        </form>
        </div>
    </div>
</body>
</html>