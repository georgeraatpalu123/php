<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="container mt-5">
    <h1 class="mb-4">H4</h1>
     
    <form action="" method="get">
        <div class="form-group">
            <label for="arv1">Esimene arv:</label>
            <input type="number" class="form-control" name="arv1" required>
        </div>

        <div class="form-group">
            <label for="arv2">Teine arv:</label>
            <input type="number" class="form-control" name="arv2" required>
        </div>
        <button type="submit" class="btn btn-primary">Jaga arvud</button>
    </form>

         <?php
            if(!empty($_GET["arv1"]) && !empty($_GET["arv2"])){
                $a=$_GET["arv1"];
                $b=$_GET["arv2"] ;
                $s=$a/$b;
                echo "Jagatis on ".$s."<br>";
            }elseif($_GET["arv1"] == 0 or $_GET["arv2"] == 0 ){echo "Sisesta midagi õiget";}
        
            ?>



        <div class="form-group">
            <form action="" method="get">
                <label for="y">Sisesta Esimene vanus</label>
                <input type="number" class="form-control" name="y" id="y"><br>
                <label for="x">Sisesta teine vanus</label>
                <input type="number" class="form-control" name="x" id="x"><br>
                <input type="submit" class="btn btn-danger my-2" value="Arvuta">
            </form>
            <?php
    
        if(!empty($_GET["x"]) && !empty($_GET["y"])) {
            $x = intval($_GET["y"]);
            $y = intval($_GET["x"]);
            if($x > $y) {
                echo "Esimene vanus ($x) on vanem kui teine  ($y).";
            } elseif($y < $x) {
                echo "Teine vanus ($y) on vanem kui esimene vanus ($x).";
            } else {
             echo "Mõlemad on ühevanused ($x).";
            }
            } else {
                echo "Palun täitke mõlemad vanuse lahtrid.";
            }

        ?>

    
    










<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
