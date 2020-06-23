<?php
$books = ["Komet", "Bulan", "Matahari"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($books as $book) : ?>
        <?= $book; ?>
    <?php endforeach; ?>
</body>

</html>