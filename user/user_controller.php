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
            echo '<script>
                    alert ("Check your password again!");
                  </script>';
            return false;
        }

        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)){
            //Kalau email salah
            echo '<script>
                    alert ("Wrong email format!");
                  </script>';
            return false;
        }

        $checkResult = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        if (mysqli_fetch_assoc($checkResult)){
            echo "<script>
                    alert('Username has already been taken!')
                 </script>";
            return false;
        }

        $status = "customer";
        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO users VALUES('','$username','$password','$email','$status')");
        return mysqli_affected_rows($conn);
    }
?>