<?php 
    include("../konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die;
    // if($cnn){
    //     echo"koneksi ke dbms mysql sukses";
    // }else{
    //     echo"koneksi ke dbms mysql gagal";
    // }
    // mysqli_close($cnn);
