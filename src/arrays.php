<?php

// 17. Crear un array de 10 números
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// 18. Obtén el largo del array e imprime en pantalla y consola
$largo = count($numeros); // count() es una función que devuelve el número de elementos de un array
echo $largo; // echo es una instrucción que imprime en pantalla
print_r($largo); // print_r() es una función que imprime en consola

// 19. Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla
$numeros[] = "once"; // se puede usar el operador [] para agregar un elemento al final del array
echo $numeros[10]; // se puede acceder a un elemento del array usando su índice entre corchetes

// 20. Ahora agrega 2 elementos más a tu array e imprime en pantalla
$numeros[] = 12;
$numeros[] = "trece";
echo $numeros[11] . " " . $numeros[12]; // se puede usar el operador . para concatenar strings

// 21. Crea un nuevo array y concaténalo con el anterior e imprime en pantalla
$otro_array = [14, 15, 16];
$numeros = array_merge($numeros, $otro_array); // array_merge() es una función que une dos o más arrays
print_r($numeros); // se puede usar print_r() para imprimir todo el array

// 22. Crear una función que imprima en consola y pantalla todos los números de un array en una lista
function imprimir_array($array)
{ // se puede definir una función usando la palabra clave function
    echo "<ul>"; // se puede usar HTML para crear una lista desordenada
    foreach ($array as $elemento) { // se puede usar un bucle foreach para recorrer los elementos de un array
        echo "<li>" . $elemento . "</li>"; // se puede usar HTML para crear un elemento de lista
        print_r($elemento); // se puede imprimir cada elemento en consola
    }
    echo "</ul>";
}

imprimir_array($numeros); // se puede llamar a una función usando su nombre y pasando los argumentos entre paréntesis

// 23. Crear una función que añade un número al array
function agregar_numero($array, $numero)
{ // se puede definir una función con dos parámetros
    $array[] = $numero; // se puede agregar el número al final del array
    return $array; // se puede devolver el array modificado usando la palabra clave return
}

$numeros = agregar_numero($numeros, 17); // se puede asignar el resultado de la función a la variable $numeros
print_r($numeros);

// 24. Crear una función que elimine los números pares de ese array
function eliminar_pares($array)
{ // se puede definir una función con un parámetro
    $nuevo_array = []; // se puede crear un array vacío
    foreach ($array as $elemento) { // se puede recorrer el array original
        $elemento = intval($elemento); // convierte el elemento a int
        if ($elemento % 2 != 0) { // se puede usar el operador % para obtener el resto de la división y el operador != para comparar si es distinto de cero
            $nuevo_array[] = $elemento; // se puede agregar el elemento al nuevo array si es impar
        }
    }
    return $nuevo_array; // se puede devolver el nuevo array
}

$numeros = eliminar_pares($numeros); // se puede asignar el resultado de la función a la variable $numeros
print_r($numeros);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>

<body>
    <h1>ARRAYS PHP</h1>
    <H2>Enunciados</H2>
    <p>17● Crear un array de 10 números. <br><br>
        18● Obtén el largo del array e imprime en pantalla y consola. <br><br>
        19● Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla. <br><br>
        20● Ahora agrega 2 elementos más a tu array e imprime en pantalla. <br><br>
        21● Crea un nuevo array y concaténalo con el anterior e imprime en pantalla. <br><br>
        22● Crear una función que imprima en consola y pantalla todos los números de un array en una lista.<br><br>
        23● Crear una función que añade un número al array.<br><br>
        24● Crear una función que elimine los números pares de ese array.<br><br>
    </p>
</body>

</html>