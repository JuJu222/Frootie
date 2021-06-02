<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../templates/head.php"?>
    <link rel="stylesheet" href="../css/product.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "../templates/navbar.php";

    if ($_SESSION['status'] != 'admin') {
        echo "You do not have access to this page.";
    } else { ?>
        <div class="spaceTitle"></div>
        <h2 class="title title-product-admin">Data Produk</h2>
        <table class="table-produk">
            <thead>
                <tr>
                    <th>No Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Berat Produk</th>
                    <th>Foto Produk</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "product_controller.php";
                $data = readProduk();
                $nomor = 1;
                foreach ($data as $key => $row) {?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $row["nama_produk"] ?></td>
                        <td><?php echo $row["harga_produk"] ?></td>
                        <td><?php echo $row["berat_produk"] ?></td>
                        <td>
                            <img src="../img/<?php echo $row["foto_produk"]; ?>" width="100px" height="200px">
                        </td>
                        <td>
                            <a href="product_delete.php?id_produk=<?= $row['id_produk'];?>" class="btn-hapus">Hapus</a>
                            <a href="product_update.php?id_produk=<?= $row['id_produk'];?>" class="btn-update">Ubah</a>
                        </td>
                    </tr>
                    <?php $nomor++;
                    } ?>
            <tr>
                <td colspan="6">    <a href="product_create.php" class="btn-tambahproduk">Tambah Produk</a></td>
            </tr>
            </tbody>
        </table>
    <?php } ?>

    <?php include "../templates/footer.php"?>
</body>

</html>