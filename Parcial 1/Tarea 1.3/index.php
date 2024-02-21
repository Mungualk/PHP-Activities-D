<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarea 1.3</title>
    <div class="titulo">
</head>
<body>
    <header>
        <div class="container-hero">
            <h1>Alpha <span>Down</span></h1>
        </div>
    <h1 class = "problem-name">5630.Colegiatura</h1>
    </div>
    <table border = "1" class="parametros">
        <tr>
            <td>Puntos</td>
            <td>11.64</td>
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
        <p>La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este:</p>
        <h4>Plan de pagos</h4>
        <ul>
            <li>La colegiatura de los alumnos se determina según el numero de materias que cursan. El costo de cada una de las materias es de $1600.</li>
            <li>Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.</li>
        </ul>
        <h2>Entrada</h2>
        <p>El número de materias "A" que Esteban va a cursar. Y un número con decimales "B" que es el promedio de Esteban</p>
        <h2>Salida</h2>
        <p>Un número entero "C" con el precio a pagar. Debe ir con un "$".</p>
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
                        echo "5 <br> 9.6";
                    ?>
                </td>
                <td>
                    <?php
                        $a = 5; $b = 9.6; $c;
                        if($b >= 9)
                        {
                            $c = $a * 1600;
                            $c-=($c*30/100);
                            echo "$",$c;
                        }
                        else
                        {
                            $c = $a * 1600;
                            $c+=($c*16/100);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "8 <br>7.8";
                    ?>
                </td>
                <td>
                    <?php
                        $a = 8; $b = 7.8; $c;
                        if($b >= 9)
                        {
                            $c = $a * 1600;
                            $c-=($c*30/100);
                            echo "$",$c;
                        }
                        else
                        {
                            $c = $a * 1600;
                            $c+=($c*16/100);
                            echo "$", $c;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "2 <br>8";
                    ?>
                </td>
                <td>
                <?php
                        $a = 2; $b = 8; $c;
                        if($b >= 9)
                        {
                            $c = $a * 1600;
                            $c-=($c*30/100);
                            echo "$",$c;
                        }
                        else
                        {
                            $c = $a * 1600;
                            $c+=($c*16/100);
                            echo "$", $c;
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>
    </header>
</body>
</html>