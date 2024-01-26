<?php

// 15. Crear función que reciba como parámetros dos números y que retorne la suma de ellos
function suma($num1, $num2)
{ // se puede definir una función usando la palabra clave function y los parámetros entre paréntesis
    $resultado = $num1 + $num2; // se puede usar el operador + para sumar dos números
    return $resultado; // se puede devolver el resultado usando la palabra clave return
}

// 16. Crear función que determine si un número es par o impar
function paridad($num)
{ // se puede definir una función usando la palabra clave function y el parámetro entre paréntesis
    if ($num % 2 == 0) { // se puede usar el operador % para obtener el resto de la división por 2 y el operador == para comparar si es igual a cero
        return "par"; // se puede devolver el resultado usando la palabra clave return
    } else {
        return "impar"; // se puede devolver el resultado usando la palabra clave return
    }
}

// Imprimir en pantalla y por consola el resultado de las funciones
$num1 = 10; // se puede declarar una variable usando el signo $ y asignarle un valor usando el signo =
$num2 = 5;
$suma = suma($num1, $num2); // se puede llamar a una función usando su nombre y pasando los argumentos entre paréntesis
$paridad1 = paridad($num1); // se puede llamar a una función usando su nombre y pasando el argumento entre paréntesis
$paridad2 = paridad($num2); // se puede llamar a una función usando su nombre y pasando el argumento entre paréntesis
echo "La suma de $num1 y $num2 es: $suma\n" . "<br>"; // se puede imprimir en pantalla usando la instrucción echo y el operador . para concatenar
echo "El número $num1 es: $paridad1\n" . "<br>"; // se puede imprimir en pantalla usando la instrucción echo y el operador . para concatenar
echo "El número $num2 es: $paridad2\n" . "<br>"; // se puede imprimir en pantalla usando la instrucción echo y el operador . para concatenar
print_r("La suma de $num1 y $num2 es: $suma\n") . "<br>"; // se puede imprimir en consola usando la función print_r y el operador . para concatenar
print_r("El número $num1 es: $paridad1\n") . "<br>"; // se puede imprimir en consola usando la función print_r y el operador . para concatenar
print_r("El número $num2 es: $paridad2\n") . "<br>"; // se puede imprimir en consola usando la función print_r y el operador . para concatenar

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <h1>FUNCIONES PHP</h1>
    <H2>Enunciados</H2>
    <p>15● Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime en pantalla y por consola el resultado. <br><br>
        16● Crear función que determine si un número es par o impar. Imprime por consola y pantalla.<br><br>
    </p>
</body>

</html>