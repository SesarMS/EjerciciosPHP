<?php
/**
 * Alumno
 * 
 * @author     César Miranda
 */
class Alumno
{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __toString()
    {
        return "El alumno se llama: " . $this->nombre . " y tiene: " . $this->edad . " años";
    }

}

// Realizar un programa en el que se declare una variable de cada tipo de dato.

$cadena1 = "Esta variable es de tipo String";
$cadena2 = 'Esta cadena utiliza comillas simples';
$cadena12 = $cadena1.$cadena2;
$cadena1 = $cadena1.$cadena1;
$numero = 14;
$pi = 3.14;
$booleano = true;
$arreglo = [1, 2, 3, 4, 5];
$alumno = new Alumno("César Miranda", 22);

echo $cadena12;
print $cadena1;


define("CONSTANTE", "César Miranda");
const VALOR = '13';

var_dump((integer)VALOR);


?>