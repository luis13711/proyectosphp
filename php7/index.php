<?php
function hola(array $nombre){
	print "Hola ".join(", ", $nombre);
}
function cadena(String $nombre){
	print "Hola ".$nombre;
}
function numero(int $nombre){
	print "Hola ".$nombre;
}
hola(["Hugo", "Paco", "Luis"]);
//hola("Luis"); error de tipo
cadena("Luis");
//cadena(["Hugo", "Paco", "Luis"]); error de tipo
numero(1);
//numero("1"); no da error
?>