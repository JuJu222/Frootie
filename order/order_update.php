<!doctype html>
<html lang="en">
<head>
    <?php include "../templates/head.php"?>
    <link rel="stylesheet" href="../css/order.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "order_controller.php";
        include "../templates/navbar.php" ;

        $data = readDataWithId($_GET["order_id"]);
    ?>
    <form method="POST" action="order_update.php?order_id=<?= $_GET["order_id"] ?>">
        <label>Message
            <textarea name="message"><?= $data["message"] ?></textarea>
        </label>
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        updateData($_GET['order_id'], $_POST['message']);
        header("Location: order.php");
}
