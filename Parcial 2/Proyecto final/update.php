<?php
    select((open_conn()));

    if ($_POST) {
        update((open_conn()));
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

    function update($conn)
    {
        if(isset($_POST['ID']) && isset($_POST['last_name']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['parent_name']) && isset($_POST['parent_email']) && isset($_POST['address']) && isset($_POST['phone_number']))
        {
            $ma = $_POST['ID'];
            $ln = $_POST['last_name'];
            $n = $_POST['name'];
            $em = $_POST['email'];
            $pn = $_POST['parent_name'];
            $pem = $_POST['parent_email'];
            $add = $_POST['address'];
            $phn = $_POST['phone_number'];
            $query = "UPDATE Students SET last_names = '$ln', name ='$n', address = '$add', email = '$em', parent_name = '$pn', parent_email = '$pem', phone_number ='$phn' WHERE id_enrollment = '$ma';";

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
            <button onclick="window.location.replace('http://localhost/crud.php')" class="button-85">Insert</button>
            <button onclick="window.location.replace('http://localhost/delete.php')" class="button-85">Delete</button>
        </div>
    </header>
    <section>
        <div class="fields">
            <form action="update.php" method="POST">
                <table class="data-input">
                    <tr>
                        <td>
                            <label for="ID">Enrollment: </label>
                        </td>
                        <td>
                            <input type="text" name="ID" id="ID">
                        </td>
                        <td>
                            <label for="last_name">Last name: </label>
                        </td>
                        <td>
                            <input type="text" name="last_name" id="last_name">
                        </td>
                        <td>
                            <label for="name">Name: </label>
                        </td>
                        <td>
                            <input type="text" name="name" id="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email: </label>
                        </td>
                        <td>
                            <input type="text" name="email" id="email">
                        </td>
                        <td>
                            <label for="parent_name">Parent name: </label>
                        </td>
                        <td>
                            <input type="text" name="parent_name" id="parent_name">
                        </td>
                        <td>
                            <label for="parent_email">Parent Email: </label>
                        </td>
                        <td>
                            <input type="text" name="parent_email" id="parent_email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="phone_number">Phone number: </label>
                        </td>
                        <td>
                            <input type="text" name="phone_number" id="phone_number">
                        </td>
                        <td>
                            <label for="address">Address: </label>
                        </td>
                        <td>
                            <input type="text" name="address" id="address">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="send" id="in" value="Update">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>
</html>