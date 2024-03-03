<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Escalera de asteriscos</title>
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
            <h2 class="nombre-tarea">Escalerad de asteriscos</h2>
        </div>
    </header>
    <div class="container">
        <div class="problema">
            <div class="instrucciones">
                <h2>Descripción</h2>
                <p>Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura N hecha de asteriscos.</p>
                <h2>Entrada</h2>
                <p>Se te dará como valor de entrada un número N, el cuál representará la longitud y alutra de la escalera.</p>
                <h2>Salida</h2>
                <p>Deberás imprimir com salida una escalera de dimensiones: N de largo y N de alto.</p>
                <div class="formulario-2">
                    <h2>Inserta datos:</h2>
                    <form action="/comoquieras/p4.php" method = "post">
                        <label for="N"> N = </label>
                        <input type="text" name="n-value" id="n-value" placeholder="2" required>
                        <input type = "submit" value = "Enviar"> <br>
                        <!-- <textarea name="resultado" id="" cols="30" rows="10" readonly></textarea> -->
                        <?php
                                    if(isset($_POST['n-value']))
                                    {
                                        $n = $_POST['n-value'];
                                        for($i = 1; $i <= $n; $i++)
                                        {
                                            for($j = 1; $j <= $i; $j++)
                                            {
                                                echo "*";
                                            }
                                            echo "<br>";
                                        }
                                    }
                                ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>