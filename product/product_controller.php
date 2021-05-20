<?php
include "../main_controller.php";

function createProduk($nama, $lokasi, $nama_produk, $harga_produk, $berat_produk) {
    $conn = conn();

    move_uploaded_file($lokasi, "../img/" .$nama);
    $sql = "INSERT INTO produk (nama_produk,harga_produk,berat_produk,foto_produk) VALUES 
        ('$nama_produk', '$harga_produk', '$berat_produk', '$nama')";
    mysqli_query($conn, $sql) or die (mysqli_error($conn));

    mysqli_close($conn);
}

function deleteProduk($id) {
    $conn = conn();

    $get = $conn->query("SELECT * FROM produk WHERE id_produk= $id");
    $row = $get->fetch_assoc();
    $foto_produk=$row['foto_produk'];
    if(file_exists("../img/$foto_produk")) {
        unlink("../img/$foto_produk");
    }

    $conn->query("DELETE FROM produk WHERE id_produk = '$_GET[id_produk]'");

    mysqli_close($conn);
}

function readProduk() {
    $conn = conn();

    $sql = "SELECT * FROM produk";
    $result = $conn->query($sql);

    $perproduk = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $temp['foto_produk'] = $row['foto_produk'];
            $temp['nama_produk'] = $row['nama_produk'];
            $temp['berat_produk'] = $row['berat_produk'];
            $temp['harga_produk'] = $row['harga_produk'];

            array_push($perproduk, $temp);
        }
    }

    mysqli_close($conn);
    return $perproduk;
}

function readProdukWithId($id) {
    $conn = conn();

    $get = $conn->query("SELECT * FROM produk WHERE id_produk=$id");
    $get->fetch_assoc();

    mysqli_close($conn);
    return $get;
}

function updateProduk($id, $namafoto, $lokasifoto, $nama_produk, $harga_produk, $berat_produk) {
    $conn = conn();

    if(!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto,"../img/$namafoto");

        $conn->query("UPDATE produk SET nama_produk ='$nama_produk', harga_produk = '$harga_produk', berat_produk = '$berat_produk', foto_produk = '$namafoto'
       WHERE id_produk = '$_GET[id_produk]'");

    }
    else {
        $conn->query("UPDATE produk SET nama_produk ='$nama_produk', harga_produk = '$harga_produk', berat_produk = '$berat_produk' WHERE id_produk = '$id'");
    }

    mysqli_close($conn);
}


