<?php
    function solve($a)
    {
        $size = strlen($a);
        $aux = 0;
        for ($i = 0; $i < $size; $i++)
        {
            if($a[$i] == 'd')
            {
                $aux++;
            }
        }
        return $aux;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Adquisición de letras</title>
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
            <h2 class="nombre-tarea">Adquisición de Letras</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos. El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.</p>
                <h2>Entrada</h2>
                <p>Un solo string de letras minúsculas.</p>
                <h2>Salida</h2>
                <p>La cantidad de veces que aparece la letra favorita de Miguel.</p>
                <div class="formulario-2">
                    <h2>Inserta datos:</h2>
                    <form action="/comoquieras/p3.php" method = "post">
                        <label for="wea">String: </label>
                        <input type="text" name="cadena" id="cadena" placeholder="abcjdlllld" required>
                        <input type="submit" value = "Enviar">
                    </form>
                    <div class = "php-solve">
                        <?php
                            if(isset($_POST['cadena']))
                            {
                                $a = $_POST['cadena'];
                                $r = solve($a);
                                echo "<p> Veces que apareció la letra fav. Del Migue:  <b>{$r}</b></p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>