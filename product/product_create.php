<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product.css">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Produk</h2>


    <form method="POST" enctype="multipart/form-data">
    <div class="form-outer">
       <label>Nama Produk</label>
       <input type="text" class="form-input" name="nama_produk">
    </div>
    <div class="form-outer">
        <label>Harga Produk (Rp)</label>
        <input type="text" class="form-input" name="harga_produk">
    </div>
    <div class="form-outer">
     <label>Berat Produk (Gr)</label>
     <input type="text" class="form-input" name="berat_produk">
    </div>
    <div class="form-outer">
      <label>Foto Produk</label>
      <input type="file" class="form-input" name="foto_produk">
    </div>
    <button class="btn-simpan" name="simpan">Simpan</button>
</form>
</body>
</html>
<?php
include "product_controller.php";

if(isset($_POST["simpan"])){
    $nama = $_FILES['foto_produk']['name'];
    $lokasi = $_FILES['foto_produk']['tmp_name'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $berat_produk = $_POST['berat_produk'];

    createProduk($nama, $lokasi, $nama_produk, $harga_produk, $berat_produk);

    //Refresh ke admin page produk (index.php?halaman=produk) tolong diganti
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
}
?>
