<!doctype html>
<html lang="en">
<head>
    <?php include "../templates/head.php"?>
    <link rel="stylesheet" href="../css/signin.css">
    <title>Document</title>
</head>
<body>
    <?php include "../templates/navbar.php"?>
    <div class="loginUI">
        <div class="logoRegister">
            <a href="/frootie/index.php"><img src="/frootie/img/Frootie_Logo_Horizontal.png"></a>
        </div>
        <div class="loginForm">
        <form action="" method="POST">
            <ul>
                <li>
                    <h4>Username</h4>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <h4>Password</h4>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="register">Login</button>
                </li>
            </ul>
        </form>
        </div>
    </div>
</body>
</html>