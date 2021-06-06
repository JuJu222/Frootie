<?php
    function conn() {
        $dbhost = "localhost";
        $dbuser = "ucweb3_Frootie";
        $dbpass = "Frootie123!@#";
        $db = "ucweb3_Frootie";

        $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("Error connecting to Database");

        return $connect;

        //    call conn with $conn = conn();
        //    close conn with mysqli_close($conn);
    }
?>