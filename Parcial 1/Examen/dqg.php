<?php
    function solve ($arr, $arr2) 
    {
        $a = $arr;
        $b = $arr2;
        $cont_a = 0;
        $cont_b = 0;
        for($i = 0; $i < 3; $i++)
        {
            if($a[$i] > $b[$i])
            {
                $cont_a++;
            }
            else
            {
                $cont_b++;
            }
        }

        if($cont_a > $cont_b)
        {
            return "El ganador es A";
        }
        else if($cont_b > $cont_a)
        {
            return "El ganador es B";
        }
        else
        {
            return "Hubo empate";
        }
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
                $a1 = array($_POST['a1'], $_POST['a2'], $_POST['a3']);
                $b1 = array($_POST['b1'], $_POST['b2'], $_POST['b3']);
                $r = solve($a1, $b1);
                echo $r;
            }
        ?>
        </div>
    </div>
</body>
<style>
</style>
</html>