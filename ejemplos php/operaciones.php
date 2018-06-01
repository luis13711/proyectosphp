/*
Operador
Nombre
Ejemplo
Resultado
= =
Igualdad
$a = = $b
Cierto si $a es igual a $b
= = =
Identidad
$a= = =$b
Cierto si $a es igual a $b y si además son del mismo tipo (sólo PHP4 o mayor)
!=
Desigualdad
$a != $b
Cierto si $a no es igual a $b
<
Menor que
$a < $b
Cierto si $a es estrictamente menor que el de $b
>
Mayor que
$a > $b
Cierto si $a es estrictamente mayor que $b
<=
Menor o igual que
$a <= $b
Cierto si $a es menor o igual que $b
>=
Mayor o igual que
$a >= $b
Cierto si $a mayor o igual que $b
Operadores de Incremento y Decremento

Los operadores de decremento o incremento son de gran utilidad en la programación, sobre todo porque ahorran tiempo, esfuerzo y código. Dichos operadores incrementan o decrementan en uno el valor de la variable a la que se le está aplicando dicho decremento o incremento. Claro está, la utilidad la veremos con un poco más de obviedad a la hora de ver los bucles, en los que de hecho, los operadores de incremento o decremento, hacen su debut triunfal y decididamente impresionante.

En PHP, los operadores de Incremento y Decremento son los siguientes:

OPERADOR
NOMBRE
EFECTO
$a++
Postincremento
Devuelve el valor de $a y luego lo incrementa en uno
++$a
Preincremento
Incrementa en uno $a y luego devuelve el valor de $a ya incrementado
$b--
Postdecremento
Devuelve el valor de $b y luego lo decrementa en uno
--$b
Predecremento
Decrementa en uno $b y luego devuelve el valor de $b ya decrementado
Operadores Lógicos

Los operadores lógicos son de extrema utilidad a la hora de decidir si un valor y otro o un valor u otro, cumplen con ciertas condiciones. De nuevo, la utilidad de estos operadores los veremos cuando veamos las estructuras de control. En PHP, los operadores lógicos son los siguientes:

Ejemplo
Nombre
Resultado
$a and $b
Y
Cierto sólo si $a y $b son ciertos
$a or $b
O
Cierto si $a ó $b ó ambos son ciertos
$a xor $b
O exclusiva
Cierto si $a ó $b son ciertos, pero no si ambos son ciertos a la vez
!$a
Negación
Cierto si $a no es cierto
$a&&$b
Y
Cierto sólo si $a y $b son ciertos
$a||$b
O
Cierto si $a ó $b ó ambos son ciertos


