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
    <?php include "../templates/navbar.php" ?>
    <div class="categories">
        <div class="smallContainer">
            <div class="spaceTitle"></div>
            <h2 class="title">Product Catalog</h2>
            <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin') { ?>
                <h2 class="h2-message"><a href="/frootie/product/product_admin.php">Admin Page</a></h2>
            <?php }?>
            <div class="row">
                <?php $perproduk = readProduk();
                foreach ($perproduk as $key => $item) { ?>
                    <div class="column2">
                        <img src="../img/<?php echo $item['foto_produk']; ?>" alt="">
                        <h4><?php echo $item['nama_produk']; ?></h4>
                        <p>Rp. <?php echo number_format($item['harga_produk']); ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include "../templates/footer.php" ?>

</body>