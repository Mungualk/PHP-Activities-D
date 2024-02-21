<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemillas</title>
</head>
<body>
    <div class="Títulos">
        <h1>13433. Estaciones del Año</h1>
    </div>
    <table border="1" cellspacin = "3" cellpadding = "3" class = "tablaparametros">
        <tr>
            <td>Puntos</td>
            <td>23.98.76</td>
            <td>Límite de memoria</td>
            <td>32Mib</td>
        </tr>
        <tr>
            <td>Límite de tiempo</td>
            <td>1s</td>
            <td>Límite de tiempo (total)</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño de límite de entrada (bytes)</td>
            <td>10KiB</td>
        </tr>
    </table>
    <div class="desc">
        <h3>Descripción</h3>
        <p>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día "d" y un mes "m" según lo siguiente: <br></p>
        <ul>
            <li>Winter del 21 de diciembre al 20 de marzo</li>
            <li>Spring del 21 de marzo al 21 de junio</li>
            <li>Summer del 22 de junio al 22 de septiembre</li>
            <li>Fall del 23 de septiembre al 20 de diciembre</li>
        </ul>
        <p>Considerando la siguiente cantidad de días para cada mes: <br></p>
        <ul>
            <li>Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días</li>
            <li>Abril, Junio, Septiembre y Noviembre 30 días</li>
            <li>Febrero 28 días</li>
            <li>Cualquier fecha fuera de estos rangos debe considerarse como no existente</li>
        </ul>
        <p>Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.</p>
    </div>
    <h3>Entrada</h3>
    <p>Dos números "d" y "m" separados por un espacio que corresponden al día y mes de una fecha determinada</p>
    <h3>Salida</h3>
    <p>Una cadena "S" que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no "existe la fecha", si la fecha no es válida.</p>
    <table border="1" cellspacin = "3" cellpadding = "3" class = "tablaejemplos">
        <tr>Entrada - Salida
            <td>
                <?php
                    echo "15 10";
                ?>
            </td>
            <td>
                <?php 
                    $d = 15; $m = 10;

                    switch ($m) 
                    {
                        case 1:
                            if($d <= 31 && $d >=1)
                            {
                                echo "Winter";
                            }
                            break;
                        case 2:
                            if($d <= 28 && $d >= 1)
                            {
                                echo "Winter";
                            }
                            break;
                        case 3:
                            if($d >= 1 && $d <= 20)
                            {
                                echo "Winter";
                            }
                            else if($d > 20 && $d <= 31)
                            {
                                echo "Spring";
                            }
                            break;
                        case 4:
                            if($d >= 1 && $d <= 30)
                            {
                                echo "Spring";
                            }
                            break;
                        case 5:
                            if($d >= 1 && $d <= 31)
                            {
                                echo "Spring";
                            }
                            break;
                        case 6:
                            if($d >= 1 && $d <= 21)
                            {
                                echo "Spring";
                            }
                            else if($d > 21 &&  $d <= 30)
                            {
                                echo "Summer";
                            }
                            break;
                        case 7:
                            if($d >= 1 && $d <= 31)
                            {
                                echo "Summer";
                            }
                            break;
                        case 8:
                            if($d >= 1 && $d <= 31)
                            {
                                echo "Summer";
                            }
                            break;
                        case 9:
                            if($d >= 1 && $d <= 22)
                            {
                                echo "Summer";
                            }
                            else if($d <= 30 && $d > 22)
                            {
                                echo "Fall";
                            }
                            break;
                        case 10:
                            if($d >= 1 && $d <= 31)
                            {
                                echo "Fall";
                            }
                            break;
                        case 11:
                            if($d >= 1 && $d <= 30)
                            {
                                echo "Fall";
                            }
                            break;
                        case 12:
                            if($d >= 1 && $d <= 20)
                            {
                                echo "Fall";
                            }
                            else if($d > 20 && $d <= 31)
                            {
                                echo "Winter";
                            }
                            break;
                        default:
                        echo "no existe la fecha";
                    }
                ?>  
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo "22 3"
                ?>
            </td>
            <td>
            <?php 
                    $d = 22; $m = 3;
                    switch ($m) 
                    {
                        case 1:
                            if($d <= 31 && $d >=1)
                            {
                                echo "Winter";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 2:
                            if($d <= 28 && $d >= 1)
                            {
                                echo "Winter";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 3:
                            if($d >= 1 && $d <= 20)
                            {
                                echo "Winter";
                            }
                            else if($d > 20 && $d <= 31)
                            {
                                echo "Spring";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 4:
                            if($d >= 1 && $d <= 30)
                            {
                                echo "Spring";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 5:
                            if($d >= 1 && $d <= 31)
                            {
                                echo "Spring";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 6:
                            if($d >= 1 && $d <= 21)
                            {
                                echo "Spring";
                            }
                            else if($d > 21 &&  $d <= 30)
                            {
                                echo "Summer";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 7:
                            if($d >= 1 && $d <= 31)
                            {
                                echo "Summer";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 8:
                            if($d >= 1 && $d <= 31)
                            {
                                echo "Summer";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 9:
                            if($d >= 1 && $d <= 22)
                            {
                                echo "Summer";
                            }
                            else if($d <= 30 && $d > 22)
                            {
                                echo "Fall";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 10:
                            if($d >= 1 && $d <= 31)
                            {
                                echo "Fall";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 11:
                            if($d >= 1 && $d <= 30)
                            {
                                echo "Fall";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                        case 12:
                            if($d >= 1 && $d <= 20)
                            {
                                echo "Fall";
                            }
                            else if($d > 20 && $d <= 31)
                            {
                                echo "Winter";
                            }
                            else
                            {
                                echo "no existe la fecha";
                            }
                            break;
                    }
                ?>  
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo "31 4"
                ?>
            </td>
            <td>
            <?php 
                $d = 31; $m = 4;
                switch ($m): 
                    case 1:
                        if($d <= 31 && $d >=1)
                        {
                            echo "Winter";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 2:
                        if($d <= 28 && $d >= 1)
                        {
                            echo "Winter";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 3:
                        if($d >= 1 && $d <= 20)
                        {
                            echo "Winter";
                        }
                        else if($d > 20 && $d <= 31)
                        {
                            echo "Spring";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 4:
                        if($d >= 1 && $d <= 30)
                        {
                            echo "Spring";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 5:
                        if($d >= 1 && $d <= 31)
                        {
                            echo "Spring";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 6:
                        if($d >= 1 && $d <= 21)
                        {
                            echo "Spring";
                        }
                        else if($d > 21 &&  $d <= 30)
                        {
                            echo "Summer";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 7:
                        if($d >= 1 && $d <= 31)
                        {
                            echo "Summer";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 8:
                        if($d >= 1 && $d <= 31)
                        {
                            echo "Summer";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 9:
                        if($d >= 1 && $d <= 22)
                        {
                            echo "Summer";
                        }
                        else if($d <= 30 && $d > 22)
                        {
                            echo "Fall";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 10:
                        if($d >= 1 && $d <= 31)
                        {
                            echo "Fall";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 11:
                        if($d >= 1 && $d <= 30)
                        {
                            echo "Fall";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    case 12:
                        if($d >= 1 && $d <= 20)
                        {
                            echo "Fall";
                        }
                        else if($d > 20 && $d <= 31)
                        {
                            echo "Winter";
                        }
                        else
                        {
                            echo "no existe la fecha";
                        }
                        break;
                    default:
                        echo "no existe la fecha";
                    endswitch;
                ?>  
            </td>
        </tr>
    </table>
    <p><br></p>
    <p><br></p>
    <h1>7294. ¿Cuántos vale 7?</h1>
    <table border="1" cellspacin = "3" cellpadding = "3" class = "tablaparametros">
        <tr>
            <td>Puntos</td>
            <td>23.98</td>
            <td>Límite de memoria</td>
            <td>32Mib</td>
        </tr>
        <tr>
            <td>Límite de tiempo</td>
            <td>1s</td>
            <td>Límite de tiempo (total)</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño de límite de entrada (bytes)</td>
            <td>10KiB</td>
        </tr>
    </table>
    <div class="desc">
        <h3>Descripción</h3>
        <p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.</p>
        <h3>Entrada</h3>
        <p>Dos enteros en el rango de -1000 a +1000</p>
        <h3>Salida</h3>
        <p>La cantidad de enteros iguales a 7.</p>
    </div>
    <div class="problema">
        <table border ="1" cellspacin ="3" cellpadding="3">
            <tr>Entrada - Salida
                <td>
                    <?php
                        echo "-3 8";
                    ?>
                </td>
                <td>
                    <?php
                    $array = array(
                        0 => -3,
                        1 => 8
                    );
                        $cont = 0;
                        for($i = 0; $i < 2; $i++)
                        {
                            if($array[$i] == 7)
                            {
                                $cont++;
                            }
                        }
                        echo $cont;   
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "7 57";
                    ?>
                </td>
                <td>
                    <?php
                    $array = array(
                        0 => 7,
                        1 => 57
                    );
                        $cont = 0;
                        for($i = 0; $i < 2; $i++)
                        {
                            if($array[$i] == 7)
                            {
                                $cont++;
                            }
                        }
                        echo $cont;   
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "62 7";
                    ?>
                </td>
                <td>
                    <?php
                    $array = array(
                        0 => 62,
                        1 => 7
                    );
                        $cont = 0;
                        for($i = 0; $i < 2; $i++)
                        {
                            if($array[$i] == 7)
                            {
                                $cont++;
                            }
                        }
                        echo $cont;   
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "7 7";
                    ?>
                </td>
                <td>
                    <?php
                    $array = array(
                        0 => 7,
                        1 => 7
                    );
                        $cont = 0;
                        for($i = 0; $i < 2; $i++)
                        {
                            if($array[$i] == 7)
                            {
                                $cont++;
                            }
                        }
                        echo $cont;   
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="problema">
        <h1>7341. El mayor de tres números</h1>
        <table border="1" cellspacin = "3" cellpadding = "3" class = "tablaparametros">
        <tr>
            <td>Puntos</td>
            <td>10.13</td>
            <td>Límite de memoria</td>
            <td>32Mib</td>
        </tr>
        <tr>
            <td>Límite de tiempo</td>
            <td>1s</td>
            <td>Límite de tiempo (total)</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño de límite de entrada (bytes)</td>
            <td>10KiB</td>
        </tr>
    </table>
    <h3>Descripción</h3>
    <p>
        Realiza un problema que imprima el mayor de tres números.
    </p>
    <h3>Entrada</h3>
    <p>
        Escribe tres números "a", "b" y "c".
    </p>
    <h3>Ejemplo</h3>
    <table border = "1" cellspacin = "3" cellpadding = "3">
        <tr>Entrada - Salida
            <td>
                <?php
                    echo "10 <br>8<br>-7"
                ?>
            </td>
            <td>
                <?php
                    $a = 10; $b = 8; $c = -7;
                    echo max($a, $b, $c);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo "10 <br>81<br>101"
                ?>
            </td>
            <td>
                <?php
                    $a = 10; $b = 81; $c = 101;
                    echo max($a, $b, $c);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo "11<br>11<br>11"
                ?>
            </td>
            <td>
                <?php
                    $a = 11; $b = 11; $c = 11;
                    echo max($a, $b, $c);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo "10<br>810<br>101"
                ?>
            </td>
            <td>
                <?php
                    $a = 10; $b = 810; $c = 101;
                    echo max($a, $b, $c);
                ?>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>