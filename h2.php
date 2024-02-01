<?php

$x = 8;
$y = 2;


$liitmine = $x + $y;
$lahutamine = $x - $y;
$korrutamine = $x * $y;
$jagamine = $x / $y;
$jaak = $x % $y;

echo "$x + $y = $liitmine<br>";
    echo "$x - $y = $lahutamine<br>";
    echo "$x / $y = $jagamine<br>";
    echo "$x * $y = $korrutamine<br>";
    echo "$x % $y = $jaak<br>";
    
    
    $millimeetrid = 1500; 
    $sentimeetrid = $millimeetrid / 10;
    $meetrid = $millimeetrid / 1000;
    
    echo "Millimeetrid: $millimeetrid mm\n<br>";
    echo "Sentimeetrid: " . number_format($sentimeetrid, 2) . " cm\n<br>";
    echo "Meetrid: " . number_format($meetrid, 2) . " m\n<br>";
    
    
    $a = 3; 
    $b = 4; 
    $c = sqrt($a**2 + $b**2);
    
    $umbermoot = round($a + $b + $c);
    $pindala = round(0.5 * $a * $b);
    
    echo "\nkolmnurga kuljed: a = $a, b = $b, c = $c\n<br>";
    echo "kolmurga umbermoott: $umbermoot \n<br>";
    echo "kolmnurga pindala: $pindala \n<br>";
    
   
    



  
?>
