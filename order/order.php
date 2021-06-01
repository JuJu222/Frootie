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
        include "../templates/navbar.php";

        session_start();
    ?>
    <div class="order-input">
        <form method="post" action="order.php">
            <h3>Message</h3>
            <textarea name="message" placeholder="Leave your order here..."></textarea>
            <br>
            <input type="submit" value="Submit" name="submit">
            <?php
            if (isset($_POST['submit'])) {
                createData($_SESSION["user_id"], $_POST['message']);
                header("Location: order.php");
            }
            ?>
        </form>
    </div>
    <div class="orders">
        <h3>My Orders</h3>
            <?php
            $datas = readData();
            foreach ($datas as $key => $data) {
                if ($data["user_id"] == $_SESSION["user_id"]) {?>
                <div class="order-card">
                    <p><?= $data["name"] ?></p>
                    <p><?= $data["date"] ?></p>
                    <p><?= $data["message"] ?></p>
                    <p><a class="button-change" href="order_update.php?order_id=<?= $data["order_id"] ?>">Change message</a>
                    <a class="button-delete" href="order_delete.php?order_id=<?= $data["order_id"] ?>">X</a>
                </div>
            <?php } } ?>
        <h3>All Orders</h3>
        <?php
        foreach ($datas as $key => $data) { ?>
            <div class="order-card">
                <p>From: <?= $data["name"] ?></p>
                <p><?= $data["date"] ?></p>
                <p><?= $data["message"] ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>