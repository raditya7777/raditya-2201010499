<?php 
    $usr = ""; 
    $ps = ""; 
    if(isset($_POST["txUSER"])){ 
        $usr = $_POST["txUSER"]; 
        $ps = $_POST["txPASKY"]; 
    } 
?><!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Form Method GET</title> 
</head> 
<body> 
    <form method="POST" action="pertemuan3.php"> 
 
        <div> 
            User Name 
            <input type="text" name="txUSER"> 
        </div> 
        <div> 
            Password 
            <input type="password" name="txPASKY"> 
        </div> 
        <div> 
            <button> Login </button> 
        </div> 
    </form>      
    <div> 
        Isi dari Form:<br> 
            1. User Name: <?=$usr?><br> 
            2. Password: <?=$ps?> 
    </div> 
</body> 
</html>