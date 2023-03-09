<?php 
/* Segundo ejercicio

Escribe un programa que lea una lista de números enteros y
determine el número que aparece más veces en la lista,
así como cuántas veces aparece ese número. Si hay varios 
números que aparecen el mismo número máximo de veces, el
programa debe imprimir cualquiera de ellos.

Ejemplo:

Entrada: [3, 7, 8, 4, 6, 10, 7, 7, 11]
Salida: El número que aparece más veces es el 7, que aparece 3 veces.

Entrada: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
Salida: Cada número aparece exactamente una vez. */

$vector1 = [3, 7, 8, 4, 6, 10, 7, 7, 11];
$vector2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function mostrar($vector){
    $mayor = 0;
    $cantidad = 0;
    $contador= 0;
    $comparador = 0;
    sort($vector);
 foreach($vector as $num) {
    $contador++;
    if($comparador != $num){
        if($cantidad < $contador){
           $mayor = $comparador;
           $cantidad = $contador;
        }
    $contador = 0;
    $comparador = $num;
    }
   }
   if($mayor == 0 and $cantidad == 1){
    echo "Cada número aparece exactamente una vez.";
   }else{  
    echo "El numero mayor es ",$mayor, " y se repite ",$cantidad, " veces.\n";
   }}

mostrar($vector1);
mostrar($vector2);
?>