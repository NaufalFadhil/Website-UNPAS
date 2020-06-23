<?php

$students = [
    ["nama" => "Naufal Fadhil", "fakultas" => "Teknologi Industri", "jurusan" => "Informatika", "gambar" => "serigala.png"],
    ["nama" => "Jessica Adelya", "gambar" => "kucing.png", "fakultas" => "Ilmu Komunikasi", "jurusan" => "Komunikasi"],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        img {
            max-width: 100px;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li><img src="img/<?= $student["gambar"] ?>"" alt=""></li>
            <li>Nama: <?= $student["nama"]; ?></li>
            <li>Fakultas: <?= $student["fakultas"]; ?></li>
            <li>Jurusan: <?= $student["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>