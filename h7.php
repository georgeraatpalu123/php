<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>h7</title>
</head>
<body>
    



<?php
echo "Tervitus<br>";



function uudiskirja_vorm() {
    echo '
    <form>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sisesta email">
        </div>
        <button type="submit" class="btn btn-primary">Sisesta</button>
    </form>';
}


uudiskirja_vorm();


function vaike($nimi) {
    return strtolower($nimi);
}


$nimi = "George";
echo vaike($nimi);



function generateEmailAndCode($nimi) {
   
    $nimi = strtolower($nimi);

  
    $email=$nimi . "@hkhk.edu.ee";


    $tähed = "abcdefghijklmnopqrstuvwxyz0123456789";
    $code = "";
    $codeLength = 7;
    $tähepikkus = strlen($tähed);
    for ($i = 0; $i < $codeLength; $i++) {
        $code .= $tähed[rand(0, $tähepikkus - 1)];
    }

    return array("email" => $email, "code" => $code);
}


$nimi = "georgeraatpalu";


$result = generateEmailAndCode($nimi);

echo "gmail: " . $result["email"] . "<br>";
echo "kood: " . $result["code"];

function suvakadnumbrid($start, $end) {
    $numbrid = [];
    for ($i = $start; $i <= $end; $i++) {
        $numbrid[] = $i;
    }
    return $numbrid;
}

$start = 2;
$end = 8;
echo implode(", ", suvakadnumbrid($start, $end));

function ristkulik($pikkus,$laius)  {
 $tehe=$pikkus * $laius;
 return $tehe;
}
 $fpikkus = 5;
 $flaius = 8;

 $tehe=ristkulik($fpikkus,$flaius);

echo "<br> ristkulik on : " . $tehe;


$isikukood= "<br> 37505280379";
echo $isikukood

?>









































</body>
</html>
