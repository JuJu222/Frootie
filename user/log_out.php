<?php
    session_start();
    session_destroy();
    header("Location: http://172.96.191.65/~ucweb3/frootie/user/sign_in.php");
?>