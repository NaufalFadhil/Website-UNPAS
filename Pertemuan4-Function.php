<?php

function greeting($time = "Datang", $name = "Administrator")
{
    return "Selamat $time, $name!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Function</title>
</head>

<body>
    <h1><?= greeting("Malam"); ?></h1>
</body>

</html>