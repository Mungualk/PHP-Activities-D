<?php
    select((open_conn()));

    if ($_POST) {
        delete((open_conn()));
    }

    function open_conn()
    {
        $connection = mysqli_connect('roundhouse.proxy.rlwy.net', 'root', 'ffHUoPpTKLzPIjZzVwjHFRgmrLZIWAvX', 'EducationField', '16843');
        return $connection;
    }

    function close_conn($connection)
    {
        mysqli_close($connection);
    }

    function select($conn)
    {
        $query = "select * from Students";
        $r = mysqli_query($conn, $query);
        echo "<table border = '1'>";
        echo "<tr><th>ID</th><th>Last Names</th><th>Name</th><th>Address</th><th>Email</th><th>Parent Name</th><th>Parent Email</th><th>Phone Number</th></tr>";
        while($row = mysqli_fetch_array($r))
        {
            echo "<tr>";
            echo "<td>" . $row['id_enrollment'] . "</td>";
            echo "<td>" . $row['last_names'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['parent_name'] . "</td>";
            echo "<td>" . $row['parent_email'] . "</td>";
            echo "<td>" . $row['phone_number'] . "</td>";
            echo "</tr>";
        }
        close_conn($conn);
    }

    function delete($conn)
    {
        if(isset($_POST['ID']))
        {
            $ma = $_POST['ID'];
            $query = "DELETE FROM Students WHERE id_enrollment = '$ma';";

            mysqli_query($conn, $query);
            header("Refresh:0");
        }
        else
        {
            echo "<script>alert('There is an empty field. Check again')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecrud.css">
    <title>Admin Panel</title>
</head>
<body>
    <header>
        <img src="/img/logo.png" alt="" class="header-logo">
        <div class="buttons">
            <button onclick="window.location.replace('http://localhost/index.html')" class="button-85">Log Out</button>
            <button onclick="window.location.replace('http://localhost/update.php')" class="button-85">Update</button>
            <button onclick="window.location.replace('http://localhost/crud.php')" class="button-85">Insert</button>
        </div>
    </header>
    <section>
        <div class="fields">
            <form action="delete.php" method="POST">
                <table class="data-input">
                    <tr>
                        <td>
                            <label for="ID">Enrollment: </label>
                        </td>
                        <td>
                            <input type="text" name="ID" id="ID">
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="send" id="in" value="Delete">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>
</html>