<?php
session_start();
include "product_controller.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../templates/head.php"?>
    <link rel="stylesheet" href="../css/home.css">
    <title>Frootie</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <?php include "../templates/navbar.php" ?>
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
</body>

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