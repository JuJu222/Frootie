<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "product");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frootie</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navigationbar">
                <div class="logo">
                    <img src="images/Frootie_Logo.png">
                </div>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="catalog.php">Products</a></li>
                        <li><a href="">Order</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>






    <div class="row">
        <?php $get = $koneksi->query("SELECT * FROM produk "); ?>
        <?php while ($perproduk = $get->fetch_assoc()) { ?>
            <div class="column5">
                <img src="images/<?php echo $perproduk['foto_produk']; ?>" alt="">
                <h4><?php echo $perproduk['nama_produk']; ?></h4>
                <p><?php echo number_format($perproduk['harga_produk']); ?></p>
            </div>
    </div>



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footerColumn1">
                </div>
                <div class="footerColumn2">
                </div>
                <div class="footerColumn3">
                </div>
            </div>
        </div>
    </div>



<?php } ?>