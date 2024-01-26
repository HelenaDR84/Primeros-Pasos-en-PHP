<?php


//4● Suponiendo estas variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// 5¿Cuál es el resultado según las tablas de verdad?
$es_un_michi_grande && $le_gusta_comer;
$es_un_michi_grande || $sabe_volar;
$sabe_volar || $tiene_2_patas;
!$le_gusta_comer;
!$le_gusta_comer || $es_un_michi_grande;


/*$es_un_michi_grande && $le_gusta_comer: Esta operación es un AND lógico. Devuelve true si ambas variables son true. Dado que $es_un_michi_grande y $le_gusta_comer son true, el resultado es true.

$es_un_michi_grande || $sabe_volar: Esta operación es un OR lógico. Devuelve true si al menos una de las variables es true. Dado que $es_un_michi_grande es true (aunque $sabe_volar es false), el resultado es true.

$sabe_volar || $tiene_2_patas: Esta operación es otro OR lógico. Devuelve true si al menos una de las variables es true. Dado que tanto $sabe_volar como $tiene_2_patas son false, el resultado es false.

!$le_gusta_comer: Esta operación es un NOT lógico. Devuelve true si la variable es false, y viceversa. Dado que $le_gusta_comer es true, el resultado es false.

!$le_gusta_comer || $es_un_michi_grande: Esta operación es un OR lógico entre !$le_gusta_comer y $es_un_michi_grande. Dado que !$le_gusta_comer es false y $es_un_michi_grande es true, el resultado es true.*/

echo '$es_un_michi_grande && $le_gusta_comer: ' . ($es_un_michi_grande && $le_gusta_comer) . "<br>";
echo '$es_un_michi_grande || $sabe_volar: ' . ($es_un_michi_grande || $sabe_volar) . "<br>";
echo '$sabe_volar || $tiene_2_patas: ' . ($sabe_volar || $tiene_2_patas) . "<br>";
echo '!$le_gusta_comer: ' . (!$le_gusta_comer) . "<br>";
echo '!$le_gusta_comer || $es_un_michi_grande: ' . (!$le_gusta_comer || $es_un_michi_grande) . "<br>";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>

<body>
    <h1>OPERADORES LOGICOS PHP</h1>
    <H2>Enunciados</H2>
    <p>4● Suponiendo estas variables<br><br>
        $es_un_michi_grande = true;<br><br>
        $le_gusta_comer = true;<br><br>
        $sabe_volar = false;<br><br>
        $tiene_2_patas = false;<br><br>

        5● // ¿Cuál es el resultado según las tablas de verdad?<br><br>
        $es_un_michi_grande && $le_gusta_comer<br><br>
        $es_un_michi_grande || $sabe_volar<br><br>
        $sabe_volar || $tiene_2_patas<br><br>
        !$le_gusta_comer<br><br>
        !$le_gusta_comer || $es_un_michi_grande<br><br>
    </p>
</body>

</html>