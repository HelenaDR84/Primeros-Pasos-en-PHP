<?php

// 27. Crear una función que convierta en minúsculas todas las letras de un texto
function a_minusculas($texto)
{ // se puede definir una función usando la palabra clave function
  $texto = strtolower($texto); // se puede usar la función strtolower() para convertir el texto a minúsculas
  return $texto; // se puede devolver el texto modificado usando la palabra clave return
}

// 28. Crear una función que convierta en mayúsculas todas las letras de un texto
function a_mayusculas($texto)
{ // se puede definir una función usando la palabra clave function
  $texto = strtoupper($texto); // se puede usar la función strtoupper() para convertir el texto a mayúsculas
  return $texto; // se puede devolver el texto modificado usando la palabra clave return
}

// 29. Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
function primera_letra($nombres)
{ // se puede definir una función usando la palabra clave function
  $nuevo_array = []; // se puede crear un array vacío
  foreach ($nombres as $nombre) { // se puede usar un bucle foreach para recorrer los elementos de un array
    $nombre = ucfirst($nombre); // se puede usar la función ucfirst() para convertir la primera letra de un texto a mayúscula
    $nuevo_array[] = $nombre; // se puede agregar el nombre al nuevo array
  }
  return $nuevo_array; // se puede devolver el nuevo array
}

// Crear un texto de ejemplo
$texto = "Estamos probando los ejercicios de Primeros Pasos en PHP.";

// Llamar a la función a_minusculas y mostrar el resultado
$texto = a_minusculas($texto);
echo "El texto después de convertirlo a minúsculas es: " . $texto . "<br>";
print_r($texto);

// Llamar a la función a_mayusculas y mostrar el resultado
$texto = a_mayusculas($texto);
echo "El texto después de convertirlo a mayúsculas es: " . $texto . "<br>";
print_r($texto);

// Crear un array de nombres de ejemplo
$nombres = ["ana", "pedro", "luis", "maría"];

// Llamar a la función primera_letra y mostrar el resultado
$nombres = primera_letra($nombres);
echo "El array de nombres después de convertir la primera letra es: " . "<br>";
print_r($nombres);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones Y Textos</title>
</head>

<body>
  <h1>FUNCIONES Y TEXTOS PHP</h1>
  <H2>Enunciados</H2>
  <p>27● Crear un función que convierta en minúsculas todas las letras de un texto.<br><br>
    28● Crear una función que convierta en mayúsculas todas las letras de un texto.<br><br>
    29● Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre en mayúscula.<br><br>
  </p>
</body>

</html>