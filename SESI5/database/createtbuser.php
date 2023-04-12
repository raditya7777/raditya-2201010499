<?php
    include("koneksi.php");

    $tbl = "CREATE TABLE tbuser(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(20),
        email VARCHAR (40),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";
        $hsl= mysqli_query($cnn, $tbl);
        if($hsl){
            echo"tabel $tbl ==> sukses";
        }