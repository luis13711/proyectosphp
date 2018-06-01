<HTML>

<HEAD>

<TITLE>Proyecto Página Dinámica</TITLE>

</HEAD>

<BODY>

<!-- Formato del Título de la página-->

<FORM METHOD = "get" ACTION = "proyecto_1.php">

<FONT FACE = "Verdana" COLOR = "#1200FF">

<CENTER><B><H2>Sistema de Cálculo de Impuesto de Producto</H2></B></CENTER>

</FONT>

Por favor digite el precio del producto:

<INPUT TYPE = "TEXT NAME" = "precio_original" MAXLENGHT = 5 SIZE = 5>

<P>

<INPUT TYPE = "Submit" VALUE = "Calcular Precio">


<?php

function calculo($precio_original){

return $precio_final = ($precio_original * 0.13) + $precio_original; 

}
echo "<BR><H2><CENTER>El precio final es: ".calculo($precio_original)."</CENTER></H2>";

?>