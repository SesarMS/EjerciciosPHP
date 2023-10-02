<?php
$numeros = array();
for ($i = 1; $i <= 5; $i++) {
    $numeros[] = rand(20,30);
}
foreach ($numeros as $numero) {
    echo $numero."\n";
}
?> 