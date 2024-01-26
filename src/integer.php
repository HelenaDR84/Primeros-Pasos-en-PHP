<?php

// 11. Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
$a = 10; // se puede declarar una variable usando el signo $ y asignarle un valor usando el signo =
$b = 5;
echo $a . " " . $b . "<br>"; // se puede imprimir el valor de una variable usando la instrucción echo y el operador . para concatenar

// 12. Suma ambas variables de tipo integer e imprime en pantalla
$suma = $a + $b; // se puede usar el operador + para sumar dos variables de tipo integer
echo $suma . "<br>";

// 13. Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola
$c = 1;
$d = 0;
echo gettype($c) . " " . gettype($d) . "<br>"; // se puede usar la función gettype() para obtener el tipo de dato de una variable
print_r(gettype($c) . " " . gettype($d)); // se puede usar la función print_r() para imprimir en consola

// 14. a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola
$c = (bool) $c; // se puede usar el amoldamiento (bool) para convertir una variable de tipo integer a tipo booleano
$d = (bool) $d;
echo gettype($c) . " " . gettype($d) . "<br>"; // se puede usar la función gettype() para obtener el tipo de dato de una variable
print_r(gettype($c) . " " . gettype($d)); // se puede usar la función print_r() para imprimir en consola

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integer PHP</title>
</head>

<body>
    <h1>INTEGER PHP</h1>
    <H2>Enunciados</H2>
    <p>11● Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla.<br><br>
        12● Suma ambas variables de tipo integer e imprime en pantalla.<br><br>
        13● Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola.<br><br>
        14● a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola..<br><br>
    </p>
</body>

</html>