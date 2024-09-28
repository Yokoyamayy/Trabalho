<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1 style="text-align: center;">Exercícios prof Adriana</h1>

<?php
$a = $b = $c = 0;
$a = $c = 5;
$b = ++$a;
$a = -$a;
$b++;
$a = $c--;

echo "<br><br><br><br>";
echo "<div style='text-align: center;'>Os valores do exercício 1 são: a = $a, b = $b, c = $c</div>";

$n1 = $n2 = $n3 = $n4 = 0;
$n1 = 10;
$n3 = $n2 = $n1;
$n1--;
$n2=++$n3;
$n2*= $n2;

echo "<br><br>";
echo "<div style='text-align: center;'>Os valores do exercício 2 são: n1 = $n1, n2 = $n2, n3 = $n3, n4 = $n4</div>";

$a = $b = $c = $d = 0;
$a = 2;
$b*=$a;
$c = $d = $a;
$c = $a--;
$b = ++$a;

echo "<br><br>";
echo "<div style='text-align: center;'>Os valores do exercício 3 são: a = $a, b = $b, c = $c, d = $d</div>";

$x = $y = $z = 0;
$x = 12;
$x--;
$x = -$x;
$y = $z = $x;
$x = ++$x;
$y = $z--;

echo "<br><br>";
echo "<div style='text-align: center;'>Os valores do exercício 4 são: x = $x, y = $y, z = $z</div>";

$x = $y = $z = 0;
$x = $y = 10;
$x--;
$y = -$x;
$y = $x + $y + (--$z) + 4;
$x = ++$x;

echo "<br><br>";
echo "<div style='text-align: center;'>Os valores do exercício 5 são: x = $x, y = $y, z = $z</div>";

$a = $b = $c = $d = 0;
$a = 2;
$a*= 2;
$b+= $a;
$c = -$b;
$d = 0;
$a = $b + $c++ * $d + ($a--) + $a;

echo "<br><br>";
echo "<div style='text-align: center;'>Os valores do exercício 6 são: a = $a, b = $b, c = $c, d = $d</div>";


?>

</body>
</html>
