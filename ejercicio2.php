<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar si un número es primo</title>
</head>
<body>

<form method="post">
    <label for="numero">Ingresa un número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php
function primo($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    if (primo($numero)) {
        echo "El número $numero es primo.";
    } else {
        echo "El número $numero NO es primo.";
    }
}
?>

</body>
</html>
