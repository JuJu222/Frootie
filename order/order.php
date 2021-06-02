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

    $datas = readData(); ?>
    <div class="spaceTitle"></div>
    <h2 class="title title-order">Product Orders</h2>
    <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin') { ?>
        <h2 class="h2-message"><a href="/frootie/order/order_admin.php">Admin Page</a></h2>
    <?php }?>
    <div class="order-input">
    <?php if (isset($_SESSION['name'])) {  ?>
            <form method="post" action="order.php">
                <h2>Message</h2>
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
    <?php } else { ?>
        <form method="post" action="order.php">
            <h2>Message</h2>
            <textarea disabled name="message" placeholder="Leave your order here..."></textarea>
            <br>
        </form>
        <h2 class="h2-message">You must be logged in to leave an order!</h2>
    <?php } ?>
    </div>

    <div class="orders">
        <?php if (isset($_SESSION['name'])) {  ?>
            <h2>My Orders</h2>
            <?php
            $haveOrder = false;
            foreach ($datas as $key => $data) {
                if ($data["user_id"] == $_SESSION["user_id"]) {
                    $haveOrder = true;?>
                    <div class="order-card">
                        <p><span>From: </span><?= $data["name"] ?></p>
                        <p><span>Time: </span><?= $data["date"] ?></p>
                        <br>
                        <p><?= $data["message"] ?></p>
                        <br>
                        <p><a class="button-change" href="order_update.php?order_id=<?= $data["order_id"] ?>">Change message</a>
                            <a class="button-delete" href="order_delete.php?order_id=<?= $data["order_id"] ?>">X</a>
                    </div>
                <?php } }
                if ($haveOrder == false) {?>
                    <h2 class="h2-message">You don't have any orders</h2>
                <?php } ?>
        <?php } ?>

        <h2>All Orders</h2>
        <?php
        foreach ($datas as $key => $data) { ?>
            <div class="order-card">
                <p><span>From: </span><?= $data["name"] ?></p>
                <p><span>Time: </span><?= $data["date"] ?></p>
                <br>
                <p><?= $data["message"] ?></p>
                <br>
            </div>
        <?php } ?>
    </div>

    <?php include "../templates/footer.php" ?>

</body>
</html>