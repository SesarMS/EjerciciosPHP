<?php
    function comprobarSuma($array, $pos){
        $suma = 0;
        for($pos += 1; $pos < count($array); $pos++){
            $suma += $array[$pos];
        }
        return $suma;
    }

    if(isset($_POST['arreglo'])){
        $arreglo = explode(",", $_POST['arreglo']);
        $resultado = array();
        $j = 0;
        while($j < (count($arreglo) - 1)){
            if($arreglo[$j] > comprobarSuma($arreglo, $j)){
            array_push($resultado,$arreglo[$j]);
            }
            $j++;
        }
    }   

?>

<!doctype html>
<html>
    <body>
        <form method="post">
            <input type="text" name="arreglo"></input>
        </form>
        <?php
        if(isset($_POST['arreglo'])){
        foreach($resultado as $numero){
            echo $numero."\n";
        }      
        }
        ?>
    </body>
</html>