<?php

    $nvar = "p1";
    if(isset($_GET["pg"])){
        $nvar= $_GET["pg"];
    }
    switch($nvar){
        case "p1":
            $judulpage= "halaman 1";
            $konten= "<h3>halaman 1</h3>";
            break;
        case "p2":
            $judulpage= "halaman 2";
            $konten= "<h3>halaman 2</h3>";
            break;
        case "p3":
            $judulpage= "halaman 3";
            $konten= "<h3>halaman 3</h3>";
            break;
        case "p4":
            $judulpage= "halaman 4";
            $konten= "<h3>halaman 4</h3>";
            break;
        case "p5":
            $judulpage= "halaman 5";
            $konten="<h3>halaman 5</h3>";
            break;
        default:
            $judulpage= "halaman 1";
            $konten= "<h3>halaman 1</h3>";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $judulpage; ?></title>
</head>
<body>
    <a href="latihan3.php?pg=p1">page1</a>
    <a href="latihan3.php?pg=p2">page2</a>
    <a href="latihan3.php?pg=p3">page3</a>
    <a href="latihan3.php?pg=p4">page4</a>
    <a href="latihan3.php?pg=p5">page5</a>
    <?php
        echo $konten;
    ?>
</body>
</html>