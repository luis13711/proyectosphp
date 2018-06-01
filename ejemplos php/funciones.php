<?php
function suma($a,$s){
	return $a+$s;
}

function hola(){

echo "<B>Esta es una prueba</B>";

}
echo "Este es el cuerpo de nuestro programa";
echo "<BR>";
echo "Aquí está la llamada a la función:<BR>";
echo suma(20,30);
hola();
//otra clase mas
function iva($precio_original){

$precio_final = ($precio_original * 0.13) + $precio_original;

return $precio_final;
}
echo "<CENTER>Cálculo del Impuesto sobre el Valor Agregado (IVA)</CENTER>";

$producto = "Disco de Joaquín Sabina";

$precio_original = 15.50;

echo "El producto es: ".$producto."<BR>";

echo "El precio original es: ".$precio_original."<BR>";

echo "El precio final es: ";

echo iva($precio_original);
//siguiente clase 
$original = "Esto es fuera de la función";

function cambio($original){

$original = "Esto es dentro de la función";

echo $original;

}
echo "Fuera de la función la variable es: ";

echo $original."<BR>";

echo "Dentro de la función, la variable es: ";

cambio($original);

echo "<BR>Esto está fuera de la función de nuevo: ";

echo $original;
//por defecto
function por_defecto($autor, $libro = "Cien años de soledad"){

return "El libro es $libro y su autor es $autor";
}
echo por_defecto("Gabriel García Márquez");

?>