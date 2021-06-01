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
    <div class="orders">
        <h3>All Orders</h3>
            <?php
            $datas = readData();
            foreach ($datas as $key => $data) { ?>
                <div class="order-card">
                    <p><?= $data["name"] ?></p>
                    <p><?= $data["date"] ?></p>
                    <p><?= $data["message"] ?></p>
                    <p><a class="button-change" href="order_update.php?order_id=<?= $data["order_id"] ?>">Change message</a>
                    <a class="button-delete" href="order_delete.php?order_id=<?= $data["order_id"] ?>">X</a>
                </div>
            <?php } ?>
    </div>
</body>
</html>