<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/stylelog.css">
</head>
<body>
    <header>
        <img src="/img/logo.png" alt="" class="header-logo">
        <h1>CRUD</h1>
    </header>
    <section>
        <div class="login-form">
            <form action="redir.php" method="post">
                <table class="login-table">
                    <tr>
                        <td><label for="username">Username: </label></td>
                        <td><input type="text" name="username" id="username" placeholder="elanticristo666"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password: </label></td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Login" id="in"></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>
</html>