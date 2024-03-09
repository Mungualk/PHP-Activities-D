<?php

    function reves($var)
    {
        $p = strrev($var);
        return $p;
    }
    function palindromo($var)
    {
        $p = $var; $r = strrev($p);
        if($p == $r)
        {
            return "SI";
        }
        else
        {
            return "NO";
        }
    }

    function br($var)
    {
        $p = $var;
        $l = strlen($var);
        for($i = 0; $i < $l; $i++)
        {
            echo $p[$i] . "<br>";
        }
        echo "<br>";
    }
    function piramide($var)
    {
        $l = strlen($var);
        $p = $var;
        $r = "";
        for($i = 0; $i < $l; $i++)
        {
            for( $j = 0; $j <= $i; $j++)
            {
                echo $p[$j];
            }
            echo "<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarea 1.8</title>
</head>
<body>
    <header>
        <div class="banner">
            <a href="index.php">
                <h1 class ="nabla-title">Éboueur</h1>
                <div class="img-logo">
                    <img src="img/gato-logo.jpeg" alt="gato-logo" id="logo">
                </div>
            </a>
            <h2 class="nombre-tarea">Apuntes</h2>
        </div>
    </header>
    <div class="container">
        <h2>"Manejo de Strings"</h2>
        <div class = "rellenoxd">
            <h3>Area de un círculo</h3>
            <form action="index.php" method="post">
                <tr>
                    <td>Palabra: </td>
                    <td><input type="text" name="txtPalabra"></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <input type="submit" name="Enviar">
            </form>
        </div>
        <div class="php-solve">
            <?php
                if($_POST)
                {
                    $palabra = $_POST['txtPalabra'];
                    echo "Palabra: " . $palabra;
                    echo "<br>Palabra al revés: " . reves($palabra);
                    echo "<br>" . palindromo($palabra) . " es un palíndromo <br>";
                    echo br($palabra);
                    echo piramide($palabra);
                }
            ?>
        </div>
    </div>
</body>
<style>
</style>
</html>