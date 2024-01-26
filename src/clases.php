<?php

// 30. Crear una clase coche con sus atributos y un atributo puede ser de tipo array
class Coche
{
  // Los atributos son las variables que almacenan los datos de la clase
  public $marca; // Un atributo de tipo string que guarda la marca del coche
  public $puertas; // Un atributo de tipo int que guarda el número de puertas del coche
  public $extras; // Un atributo de tipo array que guarda los extras del coche

  // El constructor es una función especial que se ejecuta al crear un objeto de la clase
  public function __construct($marca, $puertas, $extras)
  {
    // Se usa el operador -> para acceder a los atributos y asignarles los valores pasados como parámetros
    $this->marca = $marca;
    $this->puertas = $puertas;
    $this->extras = $extras;
  }

  // 31. Crear una función que devuelva la marca del coche
  public function getMarca()
  {
    // Se usa el operador -> para acceder al atributo marca y devolverlo con la palabra clave return
    return $this->marca;
  }

  // 32. Crear una función que devuelva la cantidad de puertas que tiene el coche
  public function getPuertas()
  {
    // Se usa el operador -> para acceder al atributo puertas y devolverlo con la palabra clave return
    return $this->puertas;
  }

  // 33. Crear una función que devuelva un atributo del array extras
  public function getExtra($indice)
  {
    // Se usa el operador -> para acceder al atributo extras y el operador [] para acceder a un elemento del array
    // Se usa el parámetro $indice para indicar el índice del elemento que se quiere devolver
    return $this->extras[$indice];
  }
}

// Crear un objeto de la clase Coche y asignarlo a la variable $miCoche
$miCoche = new Coche("Ford", 4, ["Aire acondicionado", "Radio", "GPS"]);

// Llamar a las funciones de la clase Coche y mostrar los resultados en pantalla
echo "La marca de mi coche es: " . $miCoche->getMarca() . "<br>"; // Se usa el operador -> para llamar a una función de la clase
echo "La cantidad de puertas de mi coche es: " . $miCoche->getPuertas() . "<br>";
echo "Un extra de mi coche es: " . $miCoche->getExtra(1); // Se pasa el índice 1 para obtener el segundo elemento del array extras

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clases PHP</title>
</head>

<body>
  <h1>CLASES PHP</h1>
  <H2>Enunciados</H2>
  <p>30● Crear una clase coche con sus atributos y un atributo puede ser de tipo array.<br><br>
    31● Crear una función que devuelva la marca del carro.<br><br>
    32● Crear una función que devuelva la cantidad de puertas que tiene el carro.<br><br>
    33● Crear una función que devuelva un atributo del array.<br><br>
  </p>
</body>

</html>