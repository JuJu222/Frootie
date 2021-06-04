<?php
    require '../main_controller.php';
    function register($data){
        $conn = conn();
        $name = stripslashes($data["name"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $passwordConfirm = mysqli_real_escape_string($conn, $data["passwordConfirm"]);
        $email = $data["email"];
        $emailCheck = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($emailCheck) == 1){
            echo '<script>
                    alert ("User exists!");
                  </script>';
            return false;
        }
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

        $status = "customer";
        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO users VALUES('','$name','$password','$email','$status')");
        return mysqli_affected_rows($conn);
    }

    function login($data){
        $error = false;
        $conn = conn();
        $email = $_POST["email"];
        $password = $_POST["password"];

        $emailCheck = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($emailCheck) == 1){
            //Email Check Berhasil, Check Password
            $row = mysqli_fetch_assoc($emailCheck);
            if (password_verify($password, $row["password"])){
                session_start();
                $_SESSION["user_id"] = $row["user_id"];
                $_SESSION["name"] = $row["name"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["status"] = $row["status"];
                header("Location: http://localhost/Frootie/index.php");
                exit;
                //Login Berhasil
            }
        }
        //Email salah atau password salah, logika turun
        $error = true;
        return $error;
    }

    function getData(){
        $conn = conn();
        $result = mysqli_query($conn, "SELECT * FROM users");
        
        //Ambil data dari query
        return $result;
    }

    function deleteData($id){
        $conn = conn();
        mysqli_query($conn, "DELETE FROM users WHERE user_id = $id");
        return mysqli_affected_rows($conn);
    }

    function editData($data){
        $conn = conn();
        $name = stripslashes($data["name"]);
        $email = $data["email"];
        $id = $data["id"];
        
        if ($email == ''){
            echo "<script>
                    alert('Fill the e-mail text box!')
                 </script>";
            return false;
        }

        if ($name == ''){
            echo "<script>
                    alert('Fill the name text box!')
                 </script>";
            return false;
        }

        $checkEmail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
        if (mysqli_fetch_assoc($checkEmail)){
            echo "<script>
                    alert('Email has already been taken!')
                 </script>";
            return false;
        }

        $checkName = mysqli_query($conn, "SELECT name FROM users WHERE name = '$name'");
        if (mysqli_fetch_assoc($checkName)){
            echo "<script>
                    alert('Name has already been taken!')
                 </script>";
            return false;
        }

        mysqli_query($conn, "UPDATE users SET name = '$name', email = '$email' WHERE user_id = $id");
        return mysqli_affected_rows($conn);
    }

?>