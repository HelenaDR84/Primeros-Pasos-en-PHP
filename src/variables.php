<?php

//1● Declara una variable por cada tipo de dato y asignar un valor

//STRINGS
$saludo = "Bienvenidas, Coders";

//INTEGER. ENTEROS
$numero = 7;

//FLOAT. DECIMAL
$decimal = 2.40;

//BOOLEANS. BOLEANOS
$bool = false;

//NULL. NULO
$nulo = null;

//ARRAY
$aves = array("paloma", "gaviota", "loro", "ruiseñor");


//2● Muestra el valor de esa variable en consola y en pantalla. Averigua cómo imprimir el valor

//En pantalla:
echo $saludo . "<br>";
echo $numero . "<br>";
echo $decimal . "<br>" >
    var_dump($bool);
echo "<br>";
var_dump($nulo);
echo "<br>";
print_r($aves);
echo "<br>";

//En consola:
error_log($saludo);
error_log($numero);
error_log($decimal);
error_log($bool ? 'true' : 'false');
error_log(print_r($aves, true));



//3● ¿Qué tipo de dato son las siguientes variables?

//Fácil
$nombre = "Luna";  //String
$apellido = "Lovegood";  //String
$edad = 42;  //Integer
$Ravenclaw = true;  //Boolean

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //float
$nombre_completo = $nombre . " " . //string
    $apellido;
$presento_examen = (bool) 1; //Booleans

//Avanzado
$numero_preguntas = 5 + "5";  //Integer
$numero_respuestas = "5" + 5;  //Integer
$promedio_maximo =  //Float
    $numero_respuestas / 1.0;  //Float
//$nargles = 3 + "5 nargles" Integer

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <h1>VARIABLES PHP</h1>
    <H2>Enunciados</H2>
    <p>
        1● Declara una variable por cada tipo de dato y asignar un valor. <br><br>
        2● Muestra el valor de esa variable en consola y en pantalla. Averigua cómo imprimir el valor. Booleano (que imprima true o false), un array y un valor nulo (que imprima NULL). <br><br>
        3● ¿Qué tipo de dato son las siguientes variables?<br><br>

        //Fácil<br>
        $nombre = "Luna";<br>
        $apellido = "Lovegood";<br>
        $edad = 42;<br>
        $Ravenclaw = true;<br><br>

        //Medio<br>
        $promedio = (8 + 9.5 + 9 + 10 + 8) / 5;<br>
        $nombre_completo = $nombre . " " .<br>
        $apellido;<br>
        $presento_examen = (bool) 1;<br><br>

        //Avanzado<br>
        $numero_preguntas = 5 + "5";<br>
        $numero_respuestas = "5" + 5;<br>
        $promedio_maximo =<br>
        $numero_respuestas / 1.0;<br>
        $nargles = 3 + "5 nargles"</p>
</body>

</html>