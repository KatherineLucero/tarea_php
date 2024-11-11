<?php 
/* Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci que reciba un número 
n como parámetro y genere los primeros n términos de la serie Fibonacci.
La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores */

function generarFibonacci($n) {
    // Verificar que el número sea mayor a 0
    if ($n <= 0) {
        return "El número debe ser mayor a 0.";
    }

    // Inicializar los primeros términos
    $fibonacci = [0, 1];

    // Generar la serie hasta tener n términos
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Ajustar la longitud si n es 1
    return array_slice($fibonacci, 0, $n);
}


$n = 15;
$fibonacci = generarFibonacci($n);
echo implode(", ", $fibonacci);



?>