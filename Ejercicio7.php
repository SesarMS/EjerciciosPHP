<?php
$numerosPares = array();
for ($i = 2; $i <= 100; $i += 2) {
    $numerosPares[] = $i;
}
foreach ($numerosPares as $numero) {
    echo $numero . "\n";
}
?>