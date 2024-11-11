<?php
function esPalindromo($cadena) {
    // Eliminar espacios, signos de puntuación y convertir a minúsculas
    $cadena = strtolower(preg_replace('/[^a-z0-9]/i', '', $cadena));
    
    // Verificar si la cadena es igual a su reverso
    return $cadena === strrev($cadena);
}


$texto = "Hola mundo de la programacion";
if (esPalindromo($texto)) {
    echo "\"$texto\" es un palíndromo.";
} else {
    echo "\"$texto\" no es un palíndromo.";
}
?>
