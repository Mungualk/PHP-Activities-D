<?php
    function solve($array)
    {
        $x1 = $array[0]; $y1 = $array[1]; $x2 = $array[2]; $y2 = $array[3]; $x3 = $array[4]; $y3 = $array[5]; $x4 = $array[6]; $y4 = $array[7];
        $l1 = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
        $l2 = sqrt(pow($x2 - $x3, 2) + pow($y2 - $y3, 2));
        $l3 = sqrt(pow($x3 - $x4, 2) + pow($y3 - $y4, 2));
        $l4 = sqrt(pow($x4 - $x1, 2) + pow($y4 - $y1, 2));

        $r = min($l1, $l2, $l3, $l4);

        return $r;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>El lado más corto</title>
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
            <h2 class="nombre-tarea">El lado más corto</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.</p>
                <img src="img/cuadrilatero.png" alt="cuadrilatero-img" id = "cuadrilatero-img">
                <h2>Entrada</h2>
                <p>Ocho reales x1, y1, x2, y2, x3, y3, x4, y4. Puedes suponer 0 <= Xi, Yi <= 100 y que los vértices se alistan ordenados en el sentido de las manesillas del reloj.</p>
                <h2>Salida</h2>
                <p>Un reloj que sea la longitud del lado más corto del cuadrilátero. Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta.</p>
                <div class="formulario">
                    <h2>Inserta datos:</h2>
                    <form action="/comoquieras/p3.php" method = "post">
                        <label for="X1">X1 = </label>
                        <input type="text" name="x1-value" id="x1-value" placeholder="10.1" oninput="ajustar" required>
                        <label for="Y1">Y1 = </label>
                        <input type="text" name = "y1-value" id = "y1-value" placeholder = "10.2" oninput="ajustar" required> <br>
                        <label for="X2">X2 = </label>
                        <input type="text" name="x2-value" id="x2-value" placeholder="20.2" oninput="ajustar" required>
                        <label for="Y2">Y2 = </label>
                        <input type="text" name = "y2-value" id = "y2-value" placeholder = "10.3" oninput="ajustar" required> <br>
                        <label for="X3">X3 = </label>
                        <input type="text" name="x3-value" id="x3-value" placeholder="22.3" oninput="ajustar" required>
                        <label for="Y3">Y3 = </label>
                        <input type="text" name = "y3-value" id = "y3-value" placeholder = "4.1" oninput="ajustar" required> <br>
                        <label for="X4">X4 = </label>
                        <input type="text" name="x4-value" id="x4-value" placeholder="7.5" oninput="ajustar" required>
                        <label for="Y4">Y4 = </label>
                        <input type="text" name = "y4-value" id = "y4-value" placeholder = "0.9" oninput="ajustar" required> 
                        <input type="submit" value = "Enviar">
                    </form>
                    <div class = "php-solve">
                        <?php
                            if(isset($_POST['x1-value']) && isset($_POST['y1-value']) && isset($_POST['x2-value']) && isset($_POST['y2-value']) && isset($_POST['x3-value']) && isset($_POST['y3-value']) && isset($_POST['x4-value']) && isset($_POST['y4-value']))
                            {
                                $a = array($_POST['x1-value'], $_POST['y1-value'], $_POST['x2-value'], $_POST['y2-value'], $_POST['x3-value'], $_POST['y3-value'], $_POST['x4-value'], $_POST['y4-value']);
                                $r = solve($a);
                                echo "<p>Longitud del mayor lado: {$r}</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>