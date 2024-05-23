<?php

    function solve ($in, $f, $s)
    {
        $rev = substr($s, $in, $f + 1);
        $rev = strrev($rev);

        for($i = $in; $i <= $f; $i++)
        {
            $s[$i] = $rev[$i];
        }

        return $s;
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>1er problema</title>
</head>
<body>
    <header>
        <div class="banner">
            <a href="index.php">
                <h1 class ="nabla-title"><a href="index.html">Éboueur</a></h1>
                <div class="img-logo">
                    <img src="img/gato-logo.jpeg" alt="gato-logo" id="logo">
                </div>
            </a>
            <h2 class="nombre-tarea">Al revés</h2>
        </div>
    </header>
    <div class="container">
        <h2>Salida</h2>
        <div class = "rellenoxd">
        <?php
            if($_POST)
            {
                $in = $_POST["inicio"];
                $fin = $_POST["final"];
                $str = $_POST["frs"];
                $s = solve($in, $fin, $str);
                echo "<b>Frase:</b> {$str} <br><hr>";
                echo "<b>Inversión</b>: {$s}";
            }
        ?>
        </div>
    </div>
</body>
<style>
</style>
</html>