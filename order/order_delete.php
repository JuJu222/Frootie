<?php
    include "controllers/order_controller.php";

    $order_id = $_GET['order_id'];
    deleteData($order_id);
    header("Location: order.php");
