<?php
    function solve ($p)
    {
        $tam = strlen($p);
        $cont = 0;
        for($i = 0; $i < $tam; $i++)
        {
            $char = $p[$i];
            if($char == 'Q' || $char == 'A' || $char == 'Z')
            {
                $cont ++;
            }
            else if ($char == 'W' || $char == 'S' || $char == 'X')
            {
                $cont += 2;
            } 
            else if ($char == 'E' || $char == 'D' || $char == 'C')
            {
                $cont += 3;
            }
            else if ($char == 'R' || $char == 'F' || $char == 'V')
            {
                $cont += 4;
            }
            else if ($char == 'T' || $char == 'G' || $char == 'B')
            {
                $cont += 5;
            }
            else if ($char == 'Y' || $char == 'H' || $char == 'N')
            {
                $cont += 6;
            }
            else if ($char == 'U' || $char == 'J' || $char == 'M')
            {
                $cont += 7;
            }
            else if ($char == 'I' || $char == 'K')
            {
                $cont += 8;
            }
            else if ($char == 'WO' || $char == 'L')
            {
                $cont += 9;
            }
            else
            {
                $cont += 0;
            }
        }
        
        return $cont;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Funciones con PHP</title>
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
            <h2 class="nombre-tarea">Juego de letras</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su posición en el teclado: las letras Q, A y Z reciben el valor 1, las letras W, S y X reciben el valor 2 y así sucesivamente hasta que las letras O y L reciben el valor 9 y la letra P recibe el valor 0. Una palabra formada por estas letras recibe como valor la suma de los valores de las letras que la forman. Por ejemplo, la palabra UAM recibe como valor <b>7 + 1 + 7 = 15</b>. Escribe un programa que determine el valor <b>v</b> de una palabra <b>p</b>.</p>
                <h2>Entrada</h2>
                <p>Una cadena <b>p</b> formada exclusivamente por letras mayúsculas de la A a la Z. La cadena <b>p</b> no contendrá eñes, acentos ni ningún otro símbolo. La cadena <b>p</b> medirá entre <b>1</b> y <b>1000</b> letras.</p>
                <h2>Salida</h2>
                <p>Un número entero <b>v</b></p>
            </div>
            <div class="formulario-p2">
                <h2>Inserta datos:</h2>
                <form action="/comoquieras/p2.php" method="post">
                    <label for="x">P = <label>
                    <input type="text" id="p" name="p" placeholder="UAM" required> <br>
                    <input type="submit" value="Enviar">
                </form>
                <div class="php-solve">
                <?php
                    if(isset($_POST['p']))
                    {
                        $a = $_POST['p'];
                        $r = solve($a);
                        echo "<p>Valor final = <b>{$r}</b></p>";
                    }
                ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>