<?php
    echo "Calificaciones de los papus - CBTis<br><br>";
    $a=array();
    $n = rand(1, 1000);

    for($i = 0; $i < $n; $i++) #ciclo para llenar
    {
        $x = rand(0,10);
        array_push($a, $x); 
    }

    function Reprobados(array $a, $n)
    {
        $x = 0;
        for ($i=0; $i < $n; $i++) 
        {
            if($a[$i] < 6)
            {
                $x++;
            }
        }
        return $x;
    }
    function Aprobados(array $a, $n)
    {
        $x = 0;
        for ($i=0; $i < $n; $i++) 
        {
            if($a[$i] >= 6)
            {
                $x++;
            }
        }
        return $x;
    }
    function porcentaje($val, $n)
    {
        $x = $val/$n*100;
        return $x;
    }
    function promedio(array $arr, $n)
    {
        $sum = 0;
        for( $i = 0; $i < $n; $i++ )
        {
            $sum += $arr[$i];
        }
        $sum/=$n;
        return round($sum, 2);
    }
    function superioridad(array $arr, $n)
    {
        $media = promedio($arr, $n);
        $sum = 0;
        for($i = 0; $i < $n; $i++)
        {
            if($arr[$i] >= $media)
            {
                $sum++;
            }
        }
        
        return $sum;
    }

    function desviacion_estandar(array $arr, $n)
    {
        $media = promedio($arr, $n);
        $sum = 0;
        for($i = 0; $i < $n; $i++)
        {
            $x = $arr[$i];
            $x = ($x - $media);
            $x*=$x;
            $sum+=$x;
        }
        $sum /= $n;
        return sqrt($sum);
    }

    echo "Calificaciones generadas: " . $n . "<br>";
    echo "Promedio de calificaciones: " . promedio($a, $n) . "<br>";
    echo "Calificaciones mayores o iguales al promedio: " . superioridad($a, $n) . "<br>";
    echo "Alumnos reprobados: " . Reprobados($a, $n) . "<br>      Porcentaje: %" . porcentaje(Reprobados($a, $n), $n) . "<br>";
    echo "Alumnos aprobados: " . Aprobados($a, $n) . "<br>       Porcentaje: %" . porcentaje(Aprobados($a, $n), $n) . "<br>";
    echo "Desviación estándar: " . desviacion_estandar($a, $n) . "<br>";
    echo "<table border = '1'> 
            <tr>";
    
    
    for($i=0; $i<$n; $i++) #ciclo para imprimir
    {
        if($i%30 != 0 || $i == 0)
        {
            echo "<td> " . $a[$i] . "</td>";
        }
        if($i%30==0 && $i != 0)
        {
            echo "</tr><tr>";
            echo "<td> " . $a[$i] . "</td>";
        }
    }

    echo "</tr>
        </table>";
    
?>