<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>h8</title>
</head>
<body>
 
<?php
$sp = mktime(0,0,0,20,03,2023);
echo date('d.m.Y', $sp); 


function arvutus($synd) {
    $aasta = date("Y");
    $synd = date("Y", strtotime($synd));
    $vanus = $aasta - $synd;
    return $vanus;
}


$synniaasta = "2023-10-02";


$vanus = arvutus($synniaasta);
echo "<br> kasutaja vanus sellel aastal on:  " . $vanus. " aastat.";





$kooliaasta = strtotime("23 february 2023");


$paevad = ceil(($kooliaasta  - time()) / (60 * 60 * 24));


echo " <br> kooliaastani on jaand $paevad paeva";




?>









</body>
</html>
