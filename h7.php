<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>h6</title>
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


$nimi = "GeoERGE";
echo vaike($nimi);




?>






































</body>
</html>
