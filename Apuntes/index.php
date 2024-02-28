<?php
    /*Ejemplo 1

    #Arreglos asociativos
    #Declaracion de arreglos asociativos

    $cafes=array(
        "Americano" => 40,
        "Capuchino" => 50,
        "Late" => 55,
        "Frape" => 65,
    );
    #Acceso a un elemento del arreglo
    echo "Precio: " . $cafes["Americano"];
    echo "<br>Precio: " . $cafes["Capuchino"];
    

    #Ejemplo 2
    //Arreglo de arreglos
    $personas = array(
        "Pedro" => array(
            "edad" => 17,
            "peso" => 60,
            "semestre" => 4
        ),
        "Maria" => array(
            "edad" => 18,
            "peso" => 52,
            "semestre" => 6
        )
    );

    echo "Semestre: " . $personas["Maria"]["semestre"]; // Acceso al item;
    echo "<br>";
    //Mostrar la estructura del arreglo
    echo var_dump($personas);
    

    #Ejemplo 3
    //Uso de explode
    $lista_de_frutas = "fresa, mango, sandia";
    $lista_frutas_array = explode(",", $lista_de_frutas); #Convierte la cadena en un array usando "," como separador.
    var_dump($lista_de_frutas);
    echo "<br>";
    var_dump($lista_frutas_array);
    echo "<br>";

    //Recorrer un arreglo con un ciclo foreach
    foreach($lista_frutas_array as $fruta)
    {
        echo "fruta: " . $fruta . "<br>";
    }

    #Imprimir un arreglo de arreglos con datos de edad

    
    $personillas =array(
        "yo" => array(
            "edad" => 16
        ),
        "saym" => array(
            "edad" => 18
        ),
        "rene" => array(
            "edad" => 15
        ),
        "mancha" => array(
            "edad" => 6
        ),
        "random" => array(
            "edad" => 89
        )
        );
    var_dump($personillas);
    echo "<br>";
    foreach($personillas as $person => $value)
    {
        echo "Alumno: " . $person ;
        foreach($value as $edad)
        {
            echo " - edad: " . $edad . "<br>";
        }
    }

    

    //Ciclos while

    $i = 1;
    while($i<=10) #Ciclo controlado por i
    {
        echo $i++ . "<br>";
    }

    
    echo "<hr>";
    $datos = rand(50, 100);
    while($datos > 20)
    {
        echo $datos . "<br>";
        $datos = $datos / 2;

    }
    */
?>