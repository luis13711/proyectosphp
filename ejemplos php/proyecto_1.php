<?php

/*********************************************************************************************

* Programa que calcula el precio final de un producto, a partir de su precio original m�s un impuesto

* Autor:

* Fecha:

********************************************************************************************
Rafael RM te faltan unas comillas dobles en el imput, nunca pusiste, nunca estableces que lo que mandas por post es lo que va donde dice $precio_original, en fin, repasa que son los arrays asociativos y como funciona el paso de parametros por $_GET y $_POST
Hace aproximadamente una hora � Me gusta

Luis Alberto Correa Yancel donde le coloco al input comillas dobles as� "input"
Hace 14 minutos � Me gusta

Rafael RM <input type="text name="precio_original" >
Hace 7 minutos � Me gusta

Rafael RM y en el otro archivo despues del <?php
Hace 7 minutos � Me gusta

Rafael RM debes de colocar $precio_original = $_POST["precio_original"];
Hace 6 minutos � Me gusta

Luis Alberto Correa Yancel es que ese c�digo no lo hice, reci�n ayer empece en php, lo consegu� en internet y lo use para ver que pasaba
Hace 5 minutos � Me gusta

Rafael RM mm ps est� mal, si acabas de empezar, empieza por lo b�sico del lenguaje. tipos de datos, variables, tipos de variables, bucles, funciones. y as�...
Hace 4 minutos � Me gusta

Rafael RM la programaci�n es algo cuyo aprendisaje es secuencial, si te falta algo b�sico a la final fallar�s, debes tener orden en tu aprendisaje. y pr�ctica b�stante, lee y documentate sobre los distintos tem�s y practica aun m�s...
Hace 2 minutos � Me gusta

Luis Alberto Correa Yancel si empece por lo basico lo unico que no se usar method, face, type
Hace 2 minutos � Me gusta

Luis Alberto Correa Yancel o input
Hace 2 minutos � Me gusta

Rafael RM eso es HTML antes de aprender php debes aprender HTML y recomiendo tambein CSS en sus versiones 5 y 3 respectivamente...
Hace un minuto aproximadamente � Me gusta

Luis Alberto Correa Yancel a ok
Hace un minuto aproximadamente � Me gusta

Rafael RM vaya pues y programe como los grandes, que los bits te acompa�en... xD
*/

function calculo($precio_original){ //Funci�n que calcula el precio final

return $precio_final = ($precio_original * 0.13) + $precio_original; //retorna precio final

}

echo "<BR><H2><CENTER>El precio final es: ".calculo($precio_original)."</CENTER></H2>";

/*La salida ser� centada como Header 2, incluyendo el precio final (calculado en la funci�n calculo()*/

?>