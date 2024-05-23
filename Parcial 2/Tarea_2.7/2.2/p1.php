<?php
    function solve($n)
    {
        if($n <= 0.0)
        {   
            $n = pow($n, 2) - $n;
        }
        else
        {
            $n *= -1;
            $n = (pow($n , 2) + (3 * $n));
        }
        return $n;
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
            <h2 class="nombre-tarea">Eval. una función rara</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>Evaluar de forma correcta <b>f(x) </b>dado el valor de <b>x</b>.</p>
                <h2>Entrada</h2>
                <p>Un entero N. Puedes suponer que <b>-100 <= N <= 100.</b></p>
                <h2>Salida</h2>
                <p>El resultado de <b>f(x)</b></p>
            </div>
            <div class="formulario">
                <h2>Inserta datos:</h2>
                <form action="/comoquieras/p1.php" method="post">
                    <label for="N">N:</label><br>
                    <input type="text" id="valor-n" name = "valor-n" placeholder="-78" required>
                    <input type="submit" value="Enviar">
                </form>
                <div class="php-solve">
                    <?php
                        if(isset($_POST['valor-n']))
                        {
                            $x = (int)$_POST['valor-n'];
                            $n = solve($x);
                            echo "<p>El valor final de N fué: <b>{$n}</b></p>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>