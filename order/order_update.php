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
    <div class="spaceTitle"></div>
    <h2 class="title title-order">Product Orders</h2>
    <div class="order-input">
        <form method="POST" action="order_update.php?order_id=<?= $_GET["order_id"] ?>">
            <h2>Change Message</h2>
                <textarea name="message"><?= $data["message"] ?></textarea>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <?php         include "../templates/footer.php" ; ?>

</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        updateData($_GET['order_id'], $_POST['message']);
        header("Location: order.php");
}
