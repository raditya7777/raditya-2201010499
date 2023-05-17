<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST" onsubmit="return checkform(this)">
        <div>
            Nama
            <input type="text" name="txnama" id="nama" placeolder="nama bapak kau...">
        </div>
        <div>
            NIM
            <input type="text" name="txnim" id="nim">
        </div>
        <div>
            Kelas
            <input type="text" name="txkelas" id="kelas">
        </div>
        <div>
            Jurusan
            <select name="txjurusan" id="jurusan">
            <option value="mdi">MDI</option>
            <option value="kab">KAB</option>
            <option value="rpl">RPL</option>
            <option value="desain">Desain</option>
            </select>
        </div>
        <div>
        <!-- type="checkbox" name="txmancing" -->
            Hobi <br>
            <input type="radio" name="txhobi" id="hobi" value="Mancing">Mancing 
            <input type="radio" name="txhobi" id="hobi" value="PushRank">PushRank
            <input type="radio" name="txhobi" id="hobi" value="Makan">Makan
            <input type="radio" name="txhobi" id="hobi" value="Main Bola">Main Bola
        </div>
        <div>
            Jenis Kelamin <br>
            <input type="radio" name="txjk" id="jk" value="laki-laki">Laki-laki
            <input type="radio" name="txjk" id="jk" value="peremPuan">PeremPuan
        </div>
        <div>
            <button type="submit" name="button" id="button">Kirim data</button>
        </div>
    </form>
    <script>
        function checkform(frm){
            let f = frm.elements;
            let nama = f.namedItem("txnama") .value;
            let nim = f.namedItem("txnim") .value;
            let kelas = f.namedItem("txkelas") .value;
            let jurusan = f.namedItem("txjurusan") .value;
            // let hobi = [
            //     f.namedItem("txmancing") .checked,
            //     f.namedItem("txpushRank") .checked,
            //     f.namedItem("txMakan") .checked,
            //     f.namedItem("txMainBola") .checked
            // ]
            let hobi = f.namedItem("txhobi") .value;
            let jk = f.namedItem("txjk") .value;

            console.log("Nama           : "+nama);
            console.log("NIM            : "+nim);
            console.log("Kelas          : "+kelas);
            console.log("Jurusan        : "+jurusan);
            console.log("Hobi           : "+hobi);
            console.log("Jenis Kelamin  : "+jk);
            return false;
        }
    </script>
</body>
</html>