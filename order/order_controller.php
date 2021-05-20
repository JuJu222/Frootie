<?php
    include "../main_controller.php";

    function createData($user_id, $message) {
        $conn = conn();

        $sql = "INSERT INTO orders (user_id, message) values ('$user_id', '$message')";
        mysqli_query($conn, $sql) or die (mysqli_error($conn));

        mysqli_close($conn);
    }

    function readData() {
        $conn = conn();

        $sql = "SELECT orders.order_id ,orders.user_id, orders.date, orders.message, users.name FROM orders JOIN users ON orders.user_id = users.user_id ";
        $result = $conn->query($sql);

        $datas = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $temp['order_id'] = $row['order_id'];
                $temp['user_id'] = $row['user_id'];
                $temp['name'] = $row['name'];
                $temp['date'] = $row['date'];
                $temp['message'] = $row['message'];

                array_push($datas, $temp);
            }
        }

        mysqli_close($conn);
        return $datas;
    }

    function readDataWithId($order_id) {
        $conn = conn();

        $sql = "SELECT date, message FROM orders WHERE order_id = '$order_id'";
        $result = $conn->query($sql);

        $datas = $result->fetch_assoc();

        print_r($datas);
        mysqli_close($conn);
        return $datas;
    }

    function updateData($order_id, $message) {
        $conn = conn();

        $sql = "UPDATE orders SET message = '$message' WHERE order_id = $order_id";
        mysqli_query($conn, $sql) or die (mysqli_error($conn));

        mysqli_close($conn);
    }

    function deleteData($order_id) {
        $conn = conn();

        $sql_query = "DELETE FROM orders WHERE order_id = '$order_id'";
        echo $sql_query;
        mysqli_query($conn, $sql_query) or die (mysqli_error($conn));

        mysqli_close($conn);
    }
