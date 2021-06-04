<?php
    require 'user_controller.php';
    $conn = conn();
    if(isset($_POST["sendEmail"])){
        sendMail($_POST);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "templates/head.php"?>
    <title>Document</title>
</head>
<body>
<?php include "templates/navbar.php"?>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="mail" placeholder="E-Mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" name="message" placeholder="Message"></textarea>
        <button type="submit" name="sendEmail">Submit</button>
    </form>
<?php include "templates/footer.php" ?>

</body>
</html>