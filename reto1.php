<?php /*Primer ejercicio

Escribe un programa que lea una lista de números enteros y determine si existe algún par 
de números consecutivos en la lista tales que la suma de esos dos números sea un número
 primo. Si existe dicho par, el programa debe imprimir los dos números y la suma de ellos. 
 Si no existe tal par, el programa debe imprimir un mensaje indicando que no se encontró 
 ningún par con dicha propiedad.

Ejemplo:

Entrada: [3, 7, 8, 4, 6, 10, 11]
Salida: El par (7,8) suma 15, que es primo.

Entrada: [1, 2, 3, 4, 5]
Salida: No se encontró ningún par de números consecutivos cuya suma sea un número primo.*/



function esPrimo($num) {
  if ($num < 2) {
    return false;
  }
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}

$vector1 = [3, 7, 8, 4, 6, 10, 11];
$vector2 = [1, 2, 3, 4, 5];
function mostrar($vector){
for ($x = 0; $x < count($vector)-1; $x++) {
    $resultado = array_sum((array_slice($vector,$x,2)));
    if(esPrimo($resultado)){
        echo "La suma de ",$vector[$x]," y ",$vector[$x+1], " es el numero primo: ",$resultado,"\n"; 
    }
  } 
}

mostrar($vector1);
mostrar($vector2);
?>