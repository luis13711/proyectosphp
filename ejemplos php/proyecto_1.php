<?php

/*********************************************************************************************

* Programa que calcula el precio final de un producto, a partir de su precio original más un impuesto

* Autor:

* Fecha:

********************************************************************************************
Rafael RM te faltan unas comillas dobles en el imput, nunca pusiste, nunca estableces que lo que mandas por post es lo que va donde dice $precio_original, en fin, repasa que son los arrays asociativos y como funciona el paso de parametros por $_GET y $_POST
Hace aproximadamente una hora · Me gusta

Luis Alberto Correa Yancel donde le coloco al input comillas dobles así "input"
Hace 14 minutos · Me gusta

Rafael RM <input type="text name="precio_original" >
Hace 7 minutos · Me gusta

Rafael RM y en el otro archivo despues del <?php
Hace 7 minutos · Me gusta

Rafael RM debes de colocar $precio_original = $_POST["precio_original"];
Hace 6 minutos · Me gusta

Luis Alberto Correa Yancel es que ese código no lo hice, recién ayer empece en php, lo conseguí en internet y lo use para ver que pasaba
Hace 5 minutos · Me gusta

Rafael RM mm ps está mal, si acabas de empezar, empieza por lo básico del lenguaje. tipos de datos, variables, tipos de variables, bucles, funciones. y así...
Hace 4 minutos · Me gusta

Rafael RM la programación es algo cuyo aprendisaje es secuencial, si te falta algo básico a la final fallarás, debes tener orden en tu aprendisaje. y práctica bástante, lee y documentate sobre los distintos temás y practica aun más...
Hace 2 minutos · Me gusta

Luis Alberto Correa Yancel si empece por lo basico lo unico que no se usar method, face, type
Hace 2 minutos · Me gusta

Luis Alberto Correa Yancel o input
Hace 2 minutos · Me gusta

Rafael RM eso es HTML antes de aprender php debes aprender HTML y recomiendo tambein CSS en sus versiones 5 y 3 respectivamente...
Hace un minuto aproximadamente · Me gusta

Luis Alberto Correa Yancel a ok
Hace un minuto aproximadamente · Me gusta

Rafael RM vaya pues y programe como los grandes, que los bits te acompañen... xD
*/

function calculo($precio_original){ //Función que calcula el precio final

return $precio_final = ($precio_original * 0.13) + $precio_original; //retorna precio final

}

echo "<BR><H2><CENTER>El precio final es: ".calculo($precio_original)."</CENTER></H2>";

/*La salida será centada como Header 2, incluyendo el precio final (calculado en la función calculo()*/

?>