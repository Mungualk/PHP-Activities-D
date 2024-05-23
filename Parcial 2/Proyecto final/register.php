<?php
    if($_POST)
    {
        $name = $_POST['name'];
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpa = $_POST['cpassword'];
        
        $conn = mysqli_connect('roundhouse.proxy.rlwy.net', 'root', 'ffHUoPpTKLzPIjZzVwjHFRgmrLZIWAvX', 'EducationField', '16843');
        if($pass == $cpa)
        {
            if(strlen($user) > 16)
            {
                echo "<script>alert('The username is too big, maximum 16 characters')</script>";    
            }
            else
            {
                $query = "insert into Users values (null, '$user', '$name', '$email', SHA1('$pass'))";
                mysqli_query($conn, $query);
                echo "<script>alert('Account created successfully :D')</script>";
                escape_room();
            }
        }
        else
        {
            echo "<script>alert('Your passwords do not match, dummy')</script>";
        }
    }
    function escape_room()
    {
        header('Location: http://localhost');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <header>
        <img src="/img/logo.png" alt="" class="header-logo">
        <link rel="stylesheet" href="/css/stylelog.css">
    </header>
    <section>
        <div class="register-form">
            <form action="register.php" method="post">
                <table class="register-table">
                    <tr>
                        <td><label for="name" required>Name: </label></td>
                        <td><input type="text" name="name" id="name" placeholder="Roberto Mangueras"></td>
                    </tr>
                    <tr>
                        <td><label for="username" required>Username: </label></td>
                        <td><input type="text" name="username" id="username" placeholder="elanticristo666"></td>
                    </tr>
                    <tr>
                        <td><label for="email" required>Email: </label></td>
                        <td><input type="email" name="email" id="email" placeholder="crudjohnson@popecorp.com"></td>
                    </tr>
                    <tr>
                        <td><label for="password" required>Password: </label></td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><label for="cpassword" required>Confirm Password: </label></td>
                        <td><input type="password" name="cpassword" id="cpassword"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Register" id="in"></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>
</html>