<?php

$hasil = ""; // Inisialisasi variabel hasil di luar blok if

if(isset($_GET["hitung"])){
    $operasi = $_GET["operasi"];
    $angka1 = $_GET["angka1"];
    $angka2 = $_GET["angka2"];

    if(is_numeric($angka1) && is_numeric($angka2)){
        switch($operasi){ // Menghapus tanda kutip ganda di sekitar variabel $operasi
            case "tambah":
                $hasil = $angka1 + $angka2;
                break;
            case "kurang":
                $hasil = $angka1 - $angka2;
                break;
            case "kali":
                $hasil = $angka1 * $angka2;
                break;
            case "bagi":
                if ($angka2 != 0) { // Memeriksa apakah pembaginya tidak nol
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Pembagian oleh nol tidak dapat dilakukan";
                }
                break;
            default:
                $hasil = "Anda belum memilih operasi";
                break;
        }
    } else {
        $hasil = "Anda harus memasukkan angka";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="isi">
<h1 class="judul">Kalkulator</h1>   
<form action="" method="GET">
    <input type="text" name="angka1" class="input" value="<?= @$angka1 ?>">
    <select name="operasi" class="operasi">
        <option>Pilih operasi</option>
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select>
    <input type="text" name="angka2" class="input" value="<?= @$angka2 ?>">
    <input type="submit" name="hitung" value="hitung" class="hitung">

    <h5>Hasil : 
        <br>
    <span><?= @$hasil ?></span> </h5>
</form> 
</div>

</body>
</html>