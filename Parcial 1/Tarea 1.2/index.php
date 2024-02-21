<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarea 1.2</title>
    <div class="titulo">
</head>
<body>
    <header>
        <div class="container-hero">
            <h1>Alpha <span>Down</span></h1>
        </div>
    <h1 class = "problem-name">12618.Practicando con formulas</h1>
    </div>
    <table border = "1" class="parametros">
        <tr>
            <td>Puntos</td>
            <td>10.76</td>
            <td>Límite de memoria</td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td>Límite de tiempo(caso)</td>
            <td>1s</td>
            <td>Límite de tiempo (total)</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño límite de entrada (bytes)</td>
            <td>10 KiB</td>
        </tr>
    </table>
    <div class="explicaciones">
        <h2>Descripción</h2>
        <p>Dado un valor real "a", quieres resolver una serie de ecuaciones hasta obtener el valor de "z".</p>
        <div class="ecuaciones">
                <math style="font-size: 1.7em" xmlns="http://www.w3.org/1998/Math/MathML">
                    <mi>x</mi>
                    <mo>=</mo>
                    <mn>3</mn>
                    <mi>a</mi>
                    <mo>+</mo>
                    <mn>15</mn>
                </math>
                <p><br></p>
                <math style="font-size:1.7em">
                    <mi>y</mi>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mi>x</mi>
                            <mo>+</mo>
                            <mn>3</mn>
                        </mrow>
                        <mrow>
                            <mi>x</mi>
                            <mo>+</mo>
                            <mn>1</mn>
                        </mrow>
                    </mfrac>
                </math>
                <p><br></p>
                <math style="font-size:1.7em">
                    <mi>z</mi>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                            <mi>x</mi>
                            <mo>+</mo>
                            <mn>7</mn>
                            <mi>y</mi>
                        </mrow>
                        <mrow>
                            <mi>a</mi>
                            <mi>x</mi>
                            <mi>y</mi>
                        </mrow>
                    </mfrac>
                </math>
            </div>
        <h2>Entrada</h2>
        <p>Un real "a". Puedes suponer que 1 <= a <= 100</p>
        <h2>Salida</h2>
        <p>Un real que sea el valor de z impreso con tres puntos decimales.</p>
        <h2>Ejemplo</h2>
        <table border = "1" cellspacing = "1" cellpadding = "8" class="datos">
            <tr class = "titulos-tabla">
                <td class="titulos-tabla">
                    <h4>Entrada</h4>
                </td>
                <td class = "titulos-tabla">
                    <h4>Salida</h4>
                </td>
            </tr>
            <tr class = datos-resultados>
                <td>
                    <?php
                        echo "33.562";
                    ?>
                </td>
                <td>
                    <?php
                        $a = 33.562;
                        $x = $a * 3 + 15;
                        $y = ($x + 3)/($x + 1);
                        $z = (($x * 5) + ($y * 7)) / ($a * $x * $y);
                        echo bcdiv($z, '1', 3);
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "72.569";
                    ?>
                </td>
                <td>
                    <?php
                        $a = 72.569;
                        $x = $a * 3 + 15;
                        $y = ($x + 3)/($x + 1);
                        $z = (($x * 5) + ($y * 7)) / ($a * $x * $y);
                        echo bcdiv($z, '1', 3);
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "64.835";
                    ?>
                </td>
                <td>
                    <?php
                        $a = 64.835;
                        $x = $a * 3 + 15;
                        $y = ($x + 3)/($x + 1);
                        $z = (($x * 5) + ($y * 7)) / ($a * $x * $y);
                        echo bcdiv($z, '1', 3);
                    ?>
                </td>
            </tr>
        </table>
    </div>
    </header>
</body>
</html>