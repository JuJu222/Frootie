<?php
    function conn() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "frootie";

        $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("Error connecting to Database");

        return $connect;

        //    call conn with $conn = conn();
        //    close conn with mysqli_close($conn);
    }
?>