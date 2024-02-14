<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>h6</title>
</head>
<body>


<?php

for ($i = 1; $i <= 100; $i++) {
    echo $i . ". "; 
    if ($i % 10 == 0) {
        echo "\n"; 
}
}

for($rida=1; $rida<=5; $rida++){ 
	echo '*<br>';
}

for($rida=1; $rida<=5; $rida++){ 
    for($veerg=1; $veerg<=5; $veerg++){ 
    echo '*'; 
    }
    echo '<br>';
   }

   echo "**********"


?>


<?php


for ($i = 10; $i >= 2; $i -= 2) {
    echo $i . "<br>"; 
}




// Tüdrukute ja poiste massiivid


$tudrukud = ["Anna", "Liisa", "Maria", "Kati", "Laura"];
$poisid = ["Jaan", "Mart", "Andres", "Karl", "Peeter"];

print_r($tudrukud);
print_r($poisid);

?>









?>













</body>
</html>
