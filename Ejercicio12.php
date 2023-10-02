<?php
function contarSaltos($number){
    for($i=0; $i < $number; $i++){
        echo ',_';
    }
    echo ',';
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
            $arreglo = explode(",", $_POST['arreglo']);
            $resultado = $arreglo;
            $i = 0;
            while($i < count($arreglo)){
                $salto = $arreglo[$i];
                if($salto == 0){
                    echo 0;
                    break;   
                } 
                echo $salto;
                contarSaltos($salto);
                $i += $salto;                       
    
            }
        }   
        ?>
    </body>
</html>