<?php
    function open_conn()
    {
        $connection = mysqli_connect('roundhouse.proxy.rlwy.net', 'root', 'ffHUoPpTKLzPIjZzVwjHFRgmrLZIWAvX', 'EducationField', '16843');
        return $connection;
    }

    function close_conn($connection)
    {
        mysqli_close($connection);
    }
    function user_verify($us, $pa)
    {
        $con = open_conn();
        $query = "select * from Users where username = '$us' and password = SHA1('$pa')";
        if(mysqli_num_rows(mysqli_query($con, $query)) > 0)
        {
            close_conn($con);
            return true;
        }
        else
        {
            close_conn($con);
            return false;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <header>
        <img src="/img/logo.png" alt="" class="header-logo">
        <h1>CRUD</h1>
    </header>
    <section>
        <div class="database">
            <?php
                if(user_verify($_POST['username'], $_POST['password']))
                { 
                    session_start();
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['password'] = $_POST['password'];

                    header('Location: http://localhost/crud.php');
                    exit;
                }
                else
                {
                    echo "<script> alert('User or password are wrong :3')</script>";
                    echo "<script> window.location.replace('http://localhost/login.php')</script>";
                }
            ?>
        </div>
    </section>
</body>
</html>