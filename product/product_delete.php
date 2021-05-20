<?php
include "product_controller.php";

$id = $_GET['id_produk'];
deleteProduk($id);

//Balik ke halaman awal ADMIN (index.php?halaman=produk) bisa diganti
echo "<script>alert('Produk Telah Dihapus');</script>";
echo "<script>location='product_admin.php';</script>";
