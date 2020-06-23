<?php
// cek apakdh ada data di %_GET?
if (
    !isset($_POST["nama"]) ||
    !isset($_POST["fakultas"])
) {
    // redirect memaksa menuju ke halaman tertentu
    header("Location: Pertemuan7-Input.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<body>
    <h1>Selamat datang, <?= $_POST["nama"] ?>!</h1>
    <ul>
        <li>Nama: <?= $_POST["nama"] ?></li>
        <li>Fakultas: <?= $_POST["fakultas"] ?></li>
    </ul>

    <a href="pertemuan7-Input.php">Back</a>
</body>

</html>