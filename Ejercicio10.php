<?php 
    if(isset($_POST['arreglo'])){
        $arreglo = explode(",", $_POST['arreglo']);
        $arreglo = array_unique($arreglo);
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
            $result = "";
        foreach($arreglo as $numero){
            $result = $result.$numero.", ";
        }
        $result = trim(substr_replace($result, "", -2));
        echo $result;
        }
        ?>
    </body>
</html>