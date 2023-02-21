<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Latihan 4</title>
</head>
<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];

$progdi = substr($nim, 0, 2);
$angkatan = substr($nim, 2, 4);

if ($progdi == 67) {
    $progdi = "Teknik Informatika";
} else if ($progdi == 68) {
    $progdi = "Sistem Informasi";
} else if ($progdi == 69) {
    $progdi = "DKV";
} else {
    $progdi = "Tidak Ditemukan!";
}
?>

<body>
    <h2>Selamat Datang <?= $nama; ?></h2>

    <h3>Anda adalah <?= ($jk == "Laki-Laki") ? "Mahasiswa" : "Mahasiswi"; ?></h3>
    <h4>Progdi <?= $progdi; ?> Angkatan <?= $angkatan; ?></h4>
</body>

</html>