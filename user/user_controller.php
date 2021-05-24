<?php
    require '../main_controller.php';
    function register($data){
        $conn = conn();
        $username = stripslashes($data["username"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $passwordConfirm = mysqli_real_escape_string($conn, $data["passwordConfirm"]);
        $email = $data["email"];

        if ($password !== $passwordConfirm){
            //Kalau password tidak sesuai
            return false;
        }

        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)){
            //Kalau email salah
            return false;
        }

        
    }
?>