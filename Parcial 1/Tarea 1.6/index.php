<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarea 1.6</title>
</head>
<body>
    <header>
        <div class="banner">
            <h3>Alpha <span>Down</span></h3>
        </div>
    </header>
    <div class="contenido">
    <h1>2765.Sumando dos conjuntos</h1>
    <table border = "1" class="parametros">
        <tr>
            <td>Puntos</td>
            <td>9.96</td>
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
    <h2>Descripción</h2>
    <p>Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4:<br>
        2 3 4 5 <br>
        6 7 1 3 <br>
        El resultado de sumarlos es:<br>
        8 10 5 8
    </p>
    <h2>Entrada</h2>
    <p>En la primera línea el entero N. En la segunda línea, separados por un espacio, los números del primer conjunto. En la tercera línea también separados por un espacio, los números del segundo conjunto.</p>
    <h2>Salida</h2>
    <p>Los números resultantes de sumar ambos conjuntos, separados por un espacio.</p>
    <h2>Demostración</h2>
    <div class = "solve">
        <?php
            $n = rand(1, 100);
            $array1 = array();
            $array2 = array();

            for($i = 0; $i < $n; $i++)
            {
                array_push($array1, rand(1,1000));
                array_push($array2, rand(1,1000));
            }
            echo "El tamaño de los arreglos es de: " . $n . "<hr>";
            echo "<table class = 'resultados' border = '1'>";
            echo "<tr>";
            echo "<td>Posición";
            echo "<td>Arreglo 1</td>";
            echo "<td>Arreglo 2</td>";
            echo "<td>Suma</td>";
            echo "<tr>";
            
            for( $i = 0; $i < $n; $i++)
            {
                $sum = $array1[$i] + $array2[$i];
                echo "<td>{$i}</td>" . "<td>" . $array1[$i] . "</td>" . "<td>" . $array2[$i] . "</td>" . "<td>{$sum}</td>";
                echo "</tr>";
                echo "<tr>";
            }
        ?>
    </div>
    </div>
</body>
</html>