

<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 09/02/2017
 * Time: 17:25
 */
require __DIR__ . '\vendor\autoload.php';

use src\Calculadora;

echo 'hola';
?>

<DOCTYPE html>
    <html>
        <head>
            <title>Calculadora</title>
        </head>
<body>

<form action="src/calcular.php" method="POST">
    Número 1: <input type="text" name="numero1">
    Número 2: <input type="text" name="numero2">
    <input type="submit" name="suma" value="Suma">
    <input type="submit" name="resta" value="Resta">
    <input type="submit" name="multiplicar" value="Multiplicar">
    <input type="submit" name="dividir" value="Dividir">
</form>

</body>

    </html>