<?php
    include("koneksi.php");

    $tbl = "CREATE TABLE tbmhs(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(20),
        nim int (40),
        prodi VARCHAR(10),
        gender VARCHAR(255),
        jeniskelamin VARCHAR(255),
        tanggallahir DATE,
        idmhs VARCHAR (10)
    );";
        $hsl= mysqli_query($cnn, $tbl);
        if($hsl){
            echo"tabelmhs tblmhs ==> sukses";
        }