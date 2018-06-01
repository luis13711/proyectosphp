<?php
//expresiones regulares
// ereg()
// ereg_replace()
// eregi()
// eregi_replace()
$expresion = "Rápidos corren los carros por el ferrocarril";

if(ereg("arr", $expresion, $regs)){

for($i=0; $i<=count($regs);$i++){

echo "Coincidencia $i<BR>";

}

}

?>