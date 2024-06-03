<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarea 3.2</title>
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
            <h2 class="nombre-tarea">Método "GET"</h2>
        </div>
    </header>
    <div class="container">
        <div class="options">
            <form action="index.php" method="get">
                <label for="opciones">Filtrar:</label>
                <select id="opciones" name="opciones">
                    <option value="Sin filtro">Sin flitro</option>
                    <option value="Code">Code</option>
                    <option value="Name">Name</option>
                    <option value="Continent">Continent</option>
                    <option value="Region">Region</option>
                    <option value="Surface Area">Surface Area</option>
                    <option value="Independence Year">Independence Year</option>
                    <option value="Population">Population</option>
                    <option value="Life Expectancy">Life Expectancy</option>
                    <option value="GNP">GNP</option>
                    <option value="GNP Old">GNP Old</option>
                    <option value="Local Name">Local Name</option>
                    <option value="Government Form">Government Form</option>
                    <option value="Head Of State">Head Of State</option>
                    <option value="Capital">Capital</option>
                    <option value="Code 2">Code 2</option>
                </select>
                <br><br>
                <input type="submit" value="Aplicar">
            </form>
        </div>
        <?php
            function open_conn()
            {
                $connection = mysqli_connect('localhost', 'root', '', 'world', '3306');
                return $connection;
            }

            function close_conn($connection)
            {
                mysqli_close($connection);
            }

            function select($conn)
            {
                $query = "select * from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Code</th><th>Name</th><th>Continent</th><th>Region</th><th>Surface Area</th><th>Idep Year</th><th>Population</th><th>Life Expectancy</th><th>GNP</th><th>GNP Old</th><th>Local Name</th><th>Government Form</th><th>Head Of State</th><th>Capital</th><th>Code 2</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Code'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Continent'] . "</td>";
                    echo "<td>" . $row['Region'] . "</td>";
                    echo "<td>" . $row['SurfaceArea'] . "</td>";
                    echo "<td>" . $row['IndepYear'] . "</td>";
                    echo "<td>" . $row['Population'] . "</td>";
                    echo "<td>" . $row['LifeExpectancy'] . "</td>";
                    echo "<td>" . $row['GNP'] . "</td>";
                    echo "<td>" . $row['GNPOld'] . "</td>";
                    echo "<td>" . $row['LocalName'] . "</td>";
                    echo "<td>" . $row['GovernmentForm'] . "</td>";
                    echo "<td>" . $row['HeadOfState'] . "</td>";
                    echo "<td>" . $row['Capital'] . "</td>";
                    echo "<td>" . $row['Code2'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s1($conn)
            {
                $query = "select Code from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Code</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Code'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s2($conn)
            {
                $query = "select Name from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Name</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s3($conn)
            {
                $query = "select Continent from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Continent</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Continent'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s4($conn)
            {
                $query = "select Region from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Region</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Region'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s5($conn)
            {
                $query = "select SurfaceArea from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>SurfaceArea</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['SurfaceArea'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s6($conn)
            {
                $query = "select IndepYear from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Idependence Year</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['IndepYear'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s7($conn)
            {
                $query = "select Population from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Population</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Population'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s8($conn)
            {
                $query = "select LifeExpectancy from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Life Expectancy</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['LifeExpectancy'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s9($conn)
            {
                $query = "select GNP from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>GNP</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['GNP'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s10($conn)
            {
                $query = "select GNPOld from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>GNPOld</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['GNPOld'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s11($conn)
            {
                $query = "select LocalName from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Local Name</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['LocalName'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s12($conn)
            {
                $query = "select GovernmentForm from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Government Form</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['GovernmentForm'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s13($conn)
            {
                $query = "select HeadOfState from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Head Of State</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['HeadOfState'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s14($conn)
            {
                $query = "select Capital from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Capital</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Capital'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            function s15($conn)
            {
                $query = "select Code2 from Country";
                $r = mysqli_query($conn, $query);
                echo "<table border='1' class='t-country'>";
                echo "<tr><th>Code 2</th></tr>";
                while($row = mysqli_fetch_array($r))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Code2'] . "</td>";
                    echo "</tr>";
                }
                close_conn($conn);
            }

            if (isset($_GET['opciones'])) 
            {
                $opcionSeleccionada = $_GET['opciones'];
                switch ($opcionSeleccionada) 
                {
                    case 'Code':
                        $conn = open_conn();
                        s1($conn);
                        break;
                    case 'Name':
                        $conn = open_conn();
                        s2($conn);
                        break;
                    case 'Continent':
                        $conn = open_conn();
                        s3($conn);
                        break;
                    case 'Region':
                        $conn = open_conn();
                        s4($conn);
                        break;
                    case 'Surface Area':
                        $conn = open_conn();
                        s5($conn);
                        break;
                    case 'Independence Year':
                        $conn = open_conn();
                        s6($conn);
                        break;
                    case 'Population':
                        $conn = open_conn();
                        s7($conn);
                        break;
                    case 'Life Expectancy':
                        $conn = open_conn();
                        s8($conn);
                        break;
                    case 'GNP':
                        $conn = open_conn();
                        s9($conn);
                        break;
                    case 'GNP Old':
                        $conn = open_conn();
                        s10($conn);
                        break;
                    case 'Local Name':
                        $conn = open_conn();
                        s11($conn);
                        break;
                    case 'Government Form':
                        $conn = open_conn();
                        s12($conn);
                        break;
                    case 'Head Of State':
                        $conn = open_conn();
                        s13($conn);
                        break;
                    case 'Capital':
                        $conn = open_conn();
                        s14($conn);
                        break;
                    case 'Code 2':
                        $conn = open_conn();
                        s15($conn);
                        break;
                    case 'Sin filtro':
                        $conn = open_conn();
                        select(open_conn());
                        break;
                    default:
                        echo "<p>Opción no válida seleccionada.</p>";
                        break;
                }
            }
            else
            {
                select(open_conn());
            }
        ?>
    </div>
</body>
<style>
</style>
</html>