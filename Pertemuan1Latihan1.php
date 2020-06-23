<?php
echo "Hello World! ";
print "Naufal";
print_r("Naufal Fadhil");
var_dump("Naufal Fadhil Athallah");

$a = 20;
$a += $a;
echo $a;
$b = 2;
echo $a + $b; // 22
echo $a - $b; // 18
echo $a * $b; // 40
echo $a / $b; // 10
echo $a % $b; // 0

$depan = "Naufal";
$tengah = "Fadhil";
$belakang = "Athallah";
echo $depan . " " . $tengah . " " . $belakang;

var_dump(5 > 2);

$x = 30;
var_dump($x < 20 && $x % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello, My name is <?php echo "Naufal"; ?></h1>
    <?php
    echo "<p> Hello, My name is Naufal</p>";
    ?>
</body>

</html>