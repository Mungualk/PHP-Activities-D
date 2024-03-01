<?php
    function solve($n)
    {
        $cont = 0;
        if($n % 2 == 0)
        {
            $n/=2;
            $cont++;
        }
        if($n % 2 != 0)
        {
            $n++;
            $cont++;
        }
        if($n > 99)
        {
            $n/=100;
            $cont++;
        }
        if($n <= 99 && $n > 9)
        {
            $n/= 10;
            $cont++;
        }
        if($n % 3 == 0)
        {
            $n--;
            $cont++;
        }

        return  array($n, $cont);

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
            <h2 class="nombre-tarea">Cálculos condicionales</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial N, realizar las siguientes operaciones en el orden indicado y con aritmética entera: Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1. Si el valor actual de N tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10. Si el valor actual de N es un múltiplo de tres, réstale uno. <br><br>Escribe un programa que te ayude a calcular el valor final de N y el número de veces que N fue modificado.</p>
                <h2>Entrada</h2>
                <p>Un entero N. Puedes suponer que 1 <= N <= 1000.</p>
                <h2>Salida</h2>
                <p>Dos enteros que correspondan con el valor final de N y el número de veces que N fué modificado respectivamente.</p>
            </div>
            <div class="formulario">
                <h2>Inserta datos:</h2>
                <form action="/comoquieras/p1.php" method="post">
                    <label for="N">N:</label><br>
                    <input type="text" id="valor-n" name = "valor-n" placeholder="7" required>
                    <input type="submit" value="Enviar">
                </form>
                <div class="php-solve">
                    <?php
                        if(isset($_POST['valor-n']))
                        {
                            $x = $_POST['valor-n'];
                            $r = solve($x);
                            $n = $r[0];
                            $cont = $r[1];
                            echo "<p>El valor final de N fué: {$n} <br>El número de veces que se modificó fué: {$cont}</p>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>