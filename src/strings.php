<?php

// Definir la variable string
$texto = "Gato grande";
// 6. Convertir todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original
$texto_mayusculas = strtoupper($texto); // usar la función strtoupper() para convertir el string a mayúsculas
echo $texto_mayusculas . "<br>"; // imprimir el resultado en pantalla

// 7. Imprimir en pantalla la longitud de la variable tipo string
$longitud = strlen($texto) . "<br>"; // usar la función strlen() para obtener la longitud del string
echo $longitud; // imprimir el resultado en pantalla

// 8. Imprimir en pantalla la cantidad de palabras de la variable tipo string
$palabras = str_word_count($texto); // usar la función str_word_count() para obtener la cantidad de palabras del string
echo $palabras . "<br>"; // imprimir el resultado en pantalla

// 9. Cambiar a orden inverso los caracteres de la variable string e imprimir en pantalla, sin modificar la variable original
$texto_inverso = strrev($texto); // usar la función strrev() para invertir el orden de los caracteres del string
echo $texto_inverso . "<br>"; // imprimir el resultado en pantalla

// 10. Reemplazar la palabra 'Gato' de tu variable original a 'Michi' e imprimir en pantalla
$texto_reemplazado = str_replace("Gato", "Michi", $texto); // usar la función str_replace() para reemplazar una palabra por otra en el string
echo $texto_reemplazado; // imprimir el resultado en pantalla

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <h1>STRINGS PHP</h1>
    <H2>Enunciados</H2>
    <p>6● Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.<br><br>
        7● Imprime en pantalla la longitud de la variable tipo string.<br><br>
        8● Imprime en pantalla la cantidad de palabras de la variable tipo string.<br><br>
        9● Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original.<br><br>
        10● Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.<br><br>
    </p>
</body>

</html>