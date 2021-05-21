<?php
session_start();
include "product_controller.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frootie</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navigationbar">
                <div class="logo">
                    <img src="../img/Frootie_Logo.png">
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="">Order</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="containers">
        <div class="row2">
            <?php
            $perproduk = readProduk();
            foreach ($perproduk as $key => $item) { ?>
                <div class="column5">
                    <div class="picture"></div>
                    <img src="../img/<?php echo $item['foto_produk']; ?>" alt="">
                    <h4><?php echo $item['nama_produk']; ?></h4>
                    <p><?php echo number_format($item['harga_produk']); ?></p>
                    </div>
                    
                </div>
        </div>
    </div>

<?php } ?>

<!-- <div class="footer">
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
</div> -->