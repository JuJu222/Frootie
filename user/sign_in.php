<?php
    require 'user_controller.php';
    $conn = conn();
    if (isset($_POST["login"])){
        if (login($_POST) == true){
            $error = false;
        }
        else{
            $error = true;
            echo mysqli_error($conn);
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "../templates/head.php"?>
    <link rel="stylesheet" href="../css/signin.css">
    <title>Sign In</title>
</head>
<body>
    <?php include "../templates/navbar.php"?>
    <div class="loginUI">
        <div class="logoRegister">
            <a href="/~ucweb3/frootie/index.php"><img src="/~ucweb3/frootie/img/Frootie_Logo_Horizontal.png"></a>
        </div>
        <div class="loginForm">
        <form action="" method="POST">
            <ul>
                <li>
                    <h4>Email</h4>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <h4>Password</h4>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <input type="submit" name="login" value="Log in">
                </li>
                <?php
                    if (isset($error)) : ?>
                    <li class="loginError">
                        <h3>Login Credentials Not Found!</h3>
                    </li>
                <?php
                    endif;
                ?>
            </ul>
        </form>
        </div>
        <div class="linkRegister">
            <a href="/~ucweb3/frootie/user/register.php">Need an account? Sign up now!</a>
        </div>
    </div>

    <?php include "../templates/footer.php" ?>

</body>
</html>