<?php
//array predefinido
$array1=array("Hola1","Hola2","Hola3");
foreach($array1 as $element){
	echo $element."</br>";
}
//array asociativo
$array2=array("key1"=>"element1","key2"=>"element2");
echo "asociativos"."</br>";
foreach($array2 as $key){
echo $key."</br>";

}
?>