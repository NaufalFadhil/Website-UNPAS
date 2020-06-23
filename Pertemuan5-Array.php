<?php

// Array cara Lama
$hari = array("Senin", "Selasa", "Rabu");
// Array Cara Baru
$bulan = ["Januari", "Febuari", "Maret"];
// Tipe data boleh beda
$arr = [123, "String", true];

var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";

echo $arr[1];
echo "<br>";

$hari[] = "Kamis";
$hari[] = "Jum'at";
var_dump($hari);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>