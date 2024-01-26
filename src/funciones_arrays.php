<?php

// 22. Crear una función que imprima en consola y pantalla todos los números de un array en una lista
function array_lista($array)
{ // se puede definir una función usando la palabra clave function
  echo "<ul>"; // se puede usar HTML para crear una lista desordenada
  foreach ($array as $elemento) { // se puede usar un bucle foreach para recorrer los elementos de un array
    echo "<li>" . $elemento . "</li>"; // se puede usar HTML para crear un elemento de lista
    print_r($elemento); // se puede imprimir cada elemento en consola
  }
  echo "</ul>";
}

// 23. Crear una función que añade un número al array
function agregar_numero($array, $numero)
{ // se puede definir una función con dos parámetros
  $array[] = $numero; // se puede agregar el número al final del array
  return $array; // se puede devolver el array modificado usando la palabra clave return
}

// 24. Crear una función que elimine los números pares de ese array
function eliminar_pares($array)
{ // se puede definir una función con un parámetro
  $nuevo_array = []; // se puede crear un array vacío
  foreach ($array as $elemento) { // se puede recorrer el array original
    if ($elemento % 2 != 0) { // se puede usar el operador % para obtener el resto de la división y el operador != para comparar si es distinto de cero
      $nuevo_array[] = $elemento; // se puede agregar el elemento al nuevo array si es impar
    }
  }
  return $nuevo_array; // se puede devolver el nuevo array
}


// Crear un array de 10 números
$numeros = [16, 20, 30, 49, 50, 61, 73, 80, 95, 100];

// Llamar a la función imprimir_array
array_lista($numeros);

// Llamar a la funciones agregar_numero y eliminar_pares e imprimirlas en pantalla
$numeros = agregar_numero($numeros, 15);
echo "El array después de agregar el número 15 es: ";
print_r($numeros);
$numeros = eliminar_pares($numeros);
echo "El array después de eliminar los números pares es: ";
print_r($numeros);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones Y Arrays</title>
</head>

<body>
  <h1>FUNCIONES Y ARRAYS PHP</h1>
  <H2>Enunciados</H2>
  <p>22● Crear una función que imprima en consola y pantalla todos los números de un array en una lista.<br><br>
    23● Crear una función que añade un número al array.<br><br>
    24● Crear una función que elimine los números pares de ese array.<br><br>
  </p>
</body>

</html>