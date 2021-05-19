<?php
$get = $koneksi->query("SELECT * FROM produk WHERE id_produk= '$_GET[id_produk]'");
$row = $get->fetch_assoc();
$foto_produk=$row['foto_produk'];
if(file_exists("../images/$fotoproduk"))
{
   unlink("../images/$foto_produk");
}

$koneksi->query("DELETE FROM produk WHERE id_produk = '$_GET[id_produk]'");

//Balik ke halaman awal ADMIN (index.php?halaman=produk) bisa diganti
echo "<script>location='index.php?halaman=produk';</script>";

?>