<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="product.css">
</head>

<body>
    <h2>Ubah Produk</h2>

    <?php
    $get = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
    $row= $get->fetch_assoc();
    ?>


<form method="post" enctype="multipart/form-data">
<div class="form-outer">
       <label>Nama Produk</label>
       <input type="text" class="form-input" name="nama_produk" value="<?php echo $row['nama_produk'];?>">
    </div>
    <div class="form-outer">
        <label>Harga Produk (Rp)</label>
        <input type="text" class="form-input" name="harga_produk" value="<?php echo $row['harga_produk'];?>">
    </div>
    <div class="form-outer">
     <label>Berat Produk (Gr)</label>
     <input type="text" class="form-input" name="berat_produk" value="<?php echo $row['berat_produk'];?>">
    </div>
    <div class="form-outer">
      <img src="../images/<?php echo $row['foto produk']?>" width="200px">
    </div>
    <div class="form-outer">
        <label>Ganti Foto Produk</label>
        <input type="file" name="foto_produk" class="form-input">
    </div>
    <button class="btn-simpan" name="update">Update</button>

</form>
</body>
</html>

<?php

if(isset($_POST['update']))
{
  $namafoto = $foto_produk['name'];
  $lokasifoto = $foto['tmp_name'];

  if(!empty($lokasifoto))
   {
      move_uploaded_file($lokasifoto,"../images/$namafoto");

      $koneksi->query("UPDATE produk SET nama_produk ='$_POST[nama_produk]', harga_produk = '$_POST[harga_produk]', berat_produk = '$_POST[berat_produk]', foto_produk = '$namafoto'
       WHERE id_produk = '$_GET[id_produk]'");

  }
  else
  {
    $koneksi->query("UPDATE produk SET nama_produk ='$_POST[nama_produk]', harga_produk = '$_POST[harga_produk]', berat_produk = '$_POST[berat_produk]' WHERE id_produk = '$_GET[id_produk]'");
  }
  //balik ke halaman utama
  echo "<script>location = 'index.php?halaman=produk';</script>";
}
?>