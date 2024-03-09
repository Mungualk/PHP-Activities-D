<?php
    function solve($n)
    {
        $s = $n;
        $size = strlen($n);
        $cont = 0;
        for($i = 0; $i < $size; $i++)
        {
            if($s[$i] == '1')
            {
                $cont++;
            }
        }

        if($cont % 2 == 0)
        {
            $s .= '0';
        }
        else
        {
            $s .= '1';
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
            <h2 class="nombre-tarea">Bit de paridad</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método: Bit de paridad par y Bit de paridad impar. En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par. Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.</p>
                <h2>Entrada</h2>
                <p>La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.</p>
                <h2>Salida</h2>
                <p>La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.</p>
            </div>
            <div class="formulario">
                <h2>Inserta datos:</h2>
                <form action="/comoquieras/p1.php" method="post">
                    <label for="N">N:</label><br>
                    <input type="text" id="valor-n" name = "valor-n" placeholder="1010001" required>
                    <input type="submit" value="Enviar">
                </form>
                <div class="php-solve">
                    <?php
                        if(isset($_POST['valor-n']))
                        {
                            $x = $_POST['valor-n'];
                            $r = solve($x);
                            
                            echo "Resultado: {$r}";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>