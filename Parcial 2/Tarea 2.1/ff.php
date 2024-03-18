<?php
    function g ($b, $c)
    {
        $s = (int)((7 * $b) - 3) % (pow($c, 2) + 1);
        return $s;   
    }
    function f ($a) 
    {
        $s = (int)pow($a, 3) * 4;
        $aux = (int)g(2*$a, $a*(-3));
        $s += $aux;
        return $s; 

    }
    function h ($x, $y, $z)
    {
        $s = f((int)(($x)/($y)));
        $pe = g((int)(($z)/($y)), $x);
        $pe *= 3;
        $s += $pe;
        return $s;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wea</title>
</head>
<body>
    <header>
        <div class="banner">
            <a href="index.php">
                <h1 class ="nabla-title"><a href="/comoquieras/index.html">Éboueur</a></h1>
                <div class="img-logo">
                    <img src="img/gato-logo.jpeg" alt="gato-logo" id="logo">
                </div>
            </a>
            <h2 class="nombre-tarea">Dime quién ganó</h2>
        </div>
    </header>
    <div class="container">
        <h2>Salida</h2>
        <div class = "rellenoxd">
        <?php
            if($_POST)
            {
                $a = array($_POST['x-value'], $_POST['y-value'], $_POST['z-value']);
                $x = $a[0];
                $y = $a[1];
                $z = $a[2];

                echo h($x, $y, $z);
                
            }
        ?>
        </div>
    </div>
</body>
<style>
</style>
</html>