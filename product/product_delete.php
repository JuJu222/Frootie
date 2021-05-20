<?php
include "product_controller.php";

$id = $_GET['id_produk'];
deleteProduk($id);

//Balik ke halaman awal ADMIN (index.php?halaman=produk) bisa diganti
echo "<script>location='index.php?halaman=produk';</script>";
