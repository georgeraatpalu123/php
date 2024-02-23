<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>h9</title>
</head>
<body>
    
<?php

$tekst = "Life Is About Ignoring The Drama.";
echo "<br>";
echo ucfirst($tekst);




$nimi = "bomboo";
$nimi2 = implode(".", str_split(strtoupper($nimi))) . ".";
echo $nimi . "<br>" . $nimi2;




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sisend = $_POST1["sisend"];
    $roppus = array("noob", "idioot", "loll");
  
  // iga ropp sona laheb tärniks
    foreach ($roppus as $ropSõna) {
    $sisend = str_ireplace($ropSõna, str_repeat('*', strlen($ropSõna)), $sisend);
    }

    echo  $sisend;

}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $eesnimi = $_POST['eesnimi'];
    $perenimi = $_POST['perenimi'];
    
    
    $asendused = array('ä' => 'a', 'ö' => 'o', 'ü' => 'y', 'õ' => 'o');
    $eesnimi = strtr(strtolower($eesnimi), $asendused);
    $perenimi = strtr(strtolower($perenimi), $asendused);
    
   
    $email = $eesnimi . '.' . $perenimi . "@hkhk.edu.ee";
    
   
    echo "Kasutaja e-posti aadress: " . $email;
}

?>


<form method="post">
  eesnimi: <input type="text" name="eesnimi"><br>
  perenimi: <input type="text" name="perenimi"><br>
  <input type="submit" value="Loo email">
</form>










<form method="post">
  kirjuta roppus: <input type="text" name="sisend">
  <input type="submit" value="Saada">
</form>








</body>
</html>
