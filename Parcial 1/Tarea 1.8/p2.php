<?php
    function solve ($a)
    {
        $s = $a;
        $r = $a[0];
        $size = strlen($s);

        for($i = 0; $i < $size; $i++)
        {
            if($s[$i] == '-')
            {
                $r .= $s[$i+1];
            }
        }
        return $r;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculos condicionales</title>
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
            <h2 class="nombre-tarea">Autores</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos científicos anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara variaciones largas en cortas.</p>
                <h2>Entrada</h2>
                <p>La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45). El primer carácter siempre será una letra mayúscula. Los guiones siempre serán seguidos por una letra mayúscula. Todos los demás caracteres serán letras minúsculas.</p>
                <h2>Salida</h2>
                <p>La primera y única línea de salida debe contener la variación corta apropiada.</p>
            </div>
            <div class="formulario">
                <h2>Inserta datos:</h2>
                <form action="/comoquieras/p2.php" method="post">
                    <label for="cadena">Cadena: </label>
                    <input type="text" id="entrada" name="entrada" placeholder="Knuth-Morris-Pratt" required> <br>
                    <input type="submit" value="enviar">
                </form>
                <div class="php-solve">
                <?php
                    if(isset($_POST['entrada']))
                    {
                        $a = $_POST['entrada'];
                        $r = solve($a);
                        echo "<p>Variación corta = {$r}</p>";
                    }
                ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>