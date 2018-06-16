<?php
function funcion(&$nombre = "Luis Correa") {
	$nombre .= " Buenos días";

}
$nombre = "Jose";
funcion($nombre);
print ($nombre);
print ('<br>');
$frutas = array("Manzana", "Pera");
function add(&$frutas){
	array_push($frutas, "Uva");
}
add($frutas);
var_dump($frutas);
?>