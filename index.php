<?php

$x = 10;
$y = 7;

$optellen = $x + $y;
$aftrekken = $x - $y;
$vermenigvuldigen = $x * $y;
$delen = $x / $y;
$rest = $x % $y;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Optelling: <?= $optellen?> </h1>
<h1> Aftrekking: <?= $aftrekken?> </h1>
<h1> Vermenigvuldiging: <?= $vermenigvuldigen?> </h1>
<h1> Deling: <?= $delen?> </h1>
<h1> Rest: <?= $rest?> </h1>
</body>
</html>