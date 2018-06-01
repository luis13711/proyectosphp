<?php
	$conexion=mysql_connect("127.0.0.1",  "root", "luiscorrea1891") or die (" Ha Ocurrido un error en el servidor " );
	// $conexion=mysql_connect("127.0.0.1",  "root", "") or die (" Ha Ocurrido un error en el servidor " );
	mysql_select_db("clasetaller", $conexion) or die ("Existe un problema con la bdd"); 
	
	// mysql_query("insert into datos (Nombre, Apellido, Cedula) values ('$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[cedula]')",$conexion) or die ("Problemas en el select  ".mysql_error());
			// echo "Te has Registrado Exitosamente";
	$registros=mysql_query("select * from departamento",$conexion) or
  die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
  echo "<br>NroDpto:".$reg['NroDpto']."<br>";
  echo "Nombre: ".$reg['Nombre']."<br>";
  echo "Telefono: ".$reg['Telefono']."<br>";
  echo "<br>";
}
?>