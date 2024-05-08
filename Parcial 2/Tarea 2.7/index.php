<?php
    if(isset($_POST['user']) && isset($_POST['pass']))
    {
        $u = $_POST['user'];
        $p = $_POST['pass'];

        $con = mysqli_connect('localhost', 'root', '', 'sistema', '3306');
        $query = "select * from usuarios where login = '{$u}' && password = sha1('$p');";

        if(mysqli_num_rows(mysqli_query($con, $query)) > 0)
        {
            $message = "Ola {$u}";
            echo "<script>alert('$message');</script>";
        }
        else
        {
            echo "<script>alert('Ese quien es vro?');</script";
        }
    }
    else
    {
        echo "<script>alert('Verifica los campos xd');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
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
            <h2 class="nombre-tarea">Testeo de Login Bv</h2>
        </div>
    </header>
    <div class="container">
        <div class = "rellenoxd">
            <p>Es un login para acceder a la base de datos "Sistema", todo es un testeo para poner en práctica el método de hash 'SHA1'</p>
            <p>Supongo que no tengo que explicar como usar un login</p>
        </div>
        <div class="login">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="user">Usuario: </label>
                        </td>
                        <td>
                            <input type="text" name="user">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pass">Contraseña: </label>
                        </td>
                        <td>
                            <input type="password" name="pass">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="enviar">
                        </td>
                    </tr>
                </table> 
            </form>
        </div>
    </div>
</body>
<style>
</style>
</html>