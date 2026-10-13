<?php

$numero = 10;

echo "numeros del 1 al $numero:<br>";

for ($i = 1; $i <= $numero; $i++) {
    echo $i . " ";
}

echo "<br><br>";

echo "numeros invertidos:<br>";

for ($i = $numero; $i >= 1; $i--) {
    echo $i . " ";
}

?>