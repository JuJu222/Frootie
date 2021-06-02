<?php
include "product_controller.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../templates/head.php" ?>
    <link rel="stylesheet" href="../css/home.css">
    <title>Frootie</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <?php include "../templates/navbar.php" ?>
        </div>
    </div>
    <div class="categories">
        <div class="smallContainer">
            <div class="space"></div>
            <h2 class="title">Product Catalog</h2>
            <div class="row">
                <?php $perproduk = readProduk();
                foreach ($perproduk as $key => $item) { ?>
                    <div class="column2">
                        <img src="../img/<?php echo $item['foto_produk']; ?>" alt="">
                        <h4><?php echo $item['nama_produk']; ?></h4>
                        <p>Rp. <?php echo number_format($item['harga_produk']); ?></p>
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
</body>