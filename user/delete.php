<?php
    require 'user_controller.php';

    $idCheck = $_GET["id"];
    if (deleteData($idCheck) > 0){
        //Jika ada data yang mau dihapus yang dideteksi
        //Implement javascript
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href='user_edit.php';
            </script>
        ";
        //Kembali lagi ke user_edit.php
    }
    else{
        //Jika TIDAK ada data yang mau dihapus yang dideteksi
        //Implement javascript
        echo "
            <script>
                alert('Data tidak berhasil dihapus!');
                document.location.href='user_edit.php';
            </script>
        ";
        //Kembali lagi ke user_edit.php
    }
?>