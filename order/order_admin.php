<!doctype html>
<html lang="en">
<head>
    <?php include "../templates/head.php"?>
    <link rel="stylesheet" href="../css/order.css">
    <title>Edit Orders</title>
</head>
<body>
    <?php
    include "order_controller.php";
    include "../templates/navbar.php";

    if ($_SESSION['status'] != 'admin') {
        echo '<div class="wrapper">';
        echo "You do not have access to this page.";
        echo '</div>';
    } else { ?>
    <div class="wrapper">
        <div class="spaceTitle"></div>
        <h2 class="title title-order">All Orders</h2>
        <div class="orders">
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
    </div>
    <?php }
    include "../templates/footer.php"
    ?>

</body>
</html>