<!doctype html>
<html lang="en">
<head>
    <?php include "templates/head.php"?>
    <title>Contact Us</title>
</head>
<body>

<?php include "templates/navbar.php"?>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>    
        <input type="email" name="email" placeholder="E-Mail" required>
        <textarea type="text" name="message" placeholder="Message" required></textarea>
        <button type="submit" name="sendEmail" >Send</button>
    </form>
<?php include "templates/footer.php" ?>

</body>
</html>