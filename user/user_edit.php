<?php
    //Koneksi ke php
    
    require 'user_controller.php';
    $hasil = getData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../templates/head.php" ?>
    <link rel="stylesheet" href="../css/user_edit.css">
    <title>Frootie User Edit</title>
</head>

<body>
<?php include "../templates/navbar.php"?>

<h1>Daftar User</h1>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th></th>
        <th></th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($hasil)) : ?>
    <tr>
        <td><?php echo $row["user_id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><a href="edit.php?id=<?=$row["user_id"];?>">Edit</a></td>
        <td><a href="delete.php?id=<?=$row["user_id"];?>" onclick="return confirm('Apakah benar anda mau delete?');">Delete</a></td>
    </tr>
    <?php endwhile; ?>  
</table>
</body>