<?php
function suma($a,$s){
	return $a+$s;
}

function hola(){

echo "<B>Esta es una prueba</B>";

}
echo "Este es el cuerpo de nuestro programa";
echo "<BR>";
echo "Aqu� est� la llamada a la funci�n:<BR>";
echo suma(20,30);
hola();
//otra clase mas
function iva($precio_original){

$precio_final = ($precio_original * 0.13) + $precio_original;

return $precio_final;
}
echo "<CENTER>C�lculo del Impuesto sobre el Valor Agregado (IVA)</CENTER>";

$producto = "Disco de Joaqu�n Sabina";

$precio_original = 15.50;

echo "El producto es: ".$producto."<BR>";

echo "El precio original es: ".$precio_original."<BR>";

echo "El precio final es: ";

echo iva($precio_original);
//siguiente clase 
$original = "Esto es fuera de la funci�n";

function cambio($original){

$original = "Esto es dentro de la funci�n";

echo $original;

}
echo "Fuera de la funci�n la variable es: ";

echo $original."<BR>";

echo "Dentro de la funci�n, la variable es: ";

cambio($original);

echo "<BR>Esto est� fuera de la funci�n de nuevo: ";

echo $original;
//por defecto
function por_defecto($autor, $libro = "Cien a�os de soledad"){

return "El libro es $libro y su autor es $autor";
}
echo por_defecto("Gabriel Garc�a M�rquez");

?>