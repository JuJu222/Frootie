<!doctype html>
<html lang="en">
<head>
    <?php include "../templates/head.php"?>
    <link rel="stylesheet" href="../css/register.css">
    <title>Edit</title>
</head>
<body>
<?php
include "../templates/navbar.php";

if ($_SESSION['status'] != 'admin') {
    echo "You do not have access to this page.";
} else {
    require 'user_controller.php';
    $conn = conn();
    $id = $_GET["id"];
    $requiredValueRead = getData();
    $row = mysqli_fetch_assoc($requiredValueRead);
    if (isset($_POST["edit"])){
        if (editData($_POST) > 0){
            header("Location: http://localhost/Frootie/user/user_edit.php");
            //Kalau berhasil
        } else {
            //Kalau gagal
            echo mysqli_error($conn);
        }
    }
    ?>
    <div class="registerUI">
        <div class="logoRegister">
            <a href="/frootie/index.php"><img src="/frootie/img/Frootie_Logo_Horizontal.png"></a>
        </div>
        <div class="registerForm">
        <form action="" method="POST">
            <ul>
                <li>
                    <h4>ID</h4>
                    <input type="text" name="id" id="id" value="<?=$row['user_id'];?>" readonly>
                </li>
                <li>
                    <h4>Name</h4>
                    <input type="text" name="name" id="name">
                </li>
                <li>
                    <h4>Email</h4>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <button type="submit" name="edit">Edit</button>
                </li>
            </ul>
        </form>
        </div>
    </div>
<?php } ?>

    <?php include "../templates/footer.php"?>
</body>
</html>