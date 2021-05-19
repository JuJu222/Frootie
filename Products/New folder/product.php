<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Document</title>
</head>

<body>
    <h2>Data Produk</h2>


    <table class="table-produk">
        <thead>
            <tr>
                <th>No Produk</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Berat Produk</th>
                <th>Foto Produk</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 1; ?>
            <?php $get = $koneksi->query("SELECT * FROM produk"); ?>
            <?php while ($row = $get->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $row["nama_produk"] ?></td>
                    <td><?php echo $row["harga_produk"] ?></td>
                    <td><?php echo $row["berat_produk"] ?></td>
                    <td>
                        <img src="../images/<?php echo $row["foto_produk"]; ?>" width="100px" height="200px">
                    </td>


                    
                    <td>
                        <a href="" class="btn-hapus">Hapus</a>
                        <a href="" class="btn-update">Ubah</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
            <?php } ?>
        </tbody>
    </table>

    <a href="" class="btn-tambahproduk">Tambah Produk</a>
</body>

</html>