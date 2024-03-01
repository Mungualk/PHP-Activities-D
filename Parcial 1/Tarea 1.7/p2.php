<?php
    function solve ($array)
    {
        $x = $array[0]; $y = $array[1]; $z = $array[2];
        $r = ((($x+$y)/(2*$x)) + ((pow($x,3) + pow($y, 3))/(pow($x,2) + pow($y, 2))))/(pow($x,2) + pow($y,2) + pow($z,2));
        return round($r,6);
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
            <h2 class="nombre-tarea">Tarea 1.7</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z)</p>
                <div class="formula">   
                    <math style="font-size: 1.7em" xmlns="http://www.w3.org/1998/Math/MathML">
                        <mrow>
                            <mrow>
                                <mi>f</mi>
                                <mo>(</mo>
                                <mi>x</mi>
                                <mi>, </mi>
                                <mi>y</mi>
                                <mi>, </mi>
                                <mi>z</mi>
                                <mo>)</mo>
                                <mo>=</mo>
                            </mrow>
                            <mfrac>
                                <mrow>
                                    <mfrac>
                                        <mrow>
                                            <mi>x</mi>
                                            <mo>+</mo>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                            <mi>x</mi>
                                        </mrow>
                                    </mfrac>
                                    <mi>+</mi>
                                    <mfrac>
                                        <mrow>
                                            <msup>
                                                <mi>x</mi>
                                                <mn>3</mn>
                                            </msup>
                                            <mi>+</mi>
                                            <msup>
                                                <mi>y</mi>
                                                <mn>3</mn>
                                            </msup>
                                        </mrow>
                                        <mrow>
                                            <msup>
                                                <mi>x</mi>
                                                <mn>2</mn>
                                            </msup>
                                            <mi>+</mi>
                                            <msup>
                                                <mi>y</mi>
                                                <mn>2</mn>
                                            </msup>
                                        </mrow>
                                    </mfrac>
                                </mrow>
                            <mrow>
                                <msup>
                                    <mi>x</mi>
                                    <mn>2</mn>
                                </msup>
                                <mi>+</mi>
                                <msup>
                                    <mi>y</mi>
                                    <mn>2</mn>
                                </msup>
                                <mi>+</mi>
                                <msup>
                                    <mi>z</mi>
                                    <mn>2</mn>
                                </msup>
                            <mrow>
                            </mfrac>
                        </mrow>
                    </math>
                </div>
                <h2>Entrada</h2>
                <p>El formulario pedirá tres números, uno por renglón, estos pueden ser positicos, negativos, cero e incluso pueden tener decimales.</p>
                <h2>Salida</h2>
                <p>La respuesta será el valor de la función F(x,y,z) redondeado a 6 decimales. <br>Nota: Se pueden usar funciones de redondeo para ajustar la salida (xd).</p>
            </div>
            <div class="formulario-p2">
                <h2>Inserta datos:</h2>
                <form action="/comoquieras/p2.php" method="post">
                    <label for="x">X =</label>
                    <input type="text" id="valor-x" name="valor-x" placeholder="1, 4, 7" required> <br>
                    <label for="y">Y = </label>
                    <input type="text" id="valor-y" name="valor-y" placeholder="2, 5, 8" required> <br>
                    <label for="z">Z = </label>
                    <input type="text" id="valor-z" name="valor-z" placeholder="3, 6, 9" required> <br>
                    <input type="submit" value="enviar">
                </form>
                <div class="php-solve">
                <?php
                    if(isset($_POST['valor-x']) && isset($_POST['valor-y']) && isset($_POST['valor-z']))
                    {
                        $a = array($_POST['valor-x'], $_POST['valor-y'], $_POST['valor-z']);
                        $r = solve($a);
                        echo "<p>Valor final = {$r}</p>";
                    }
                ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>