<?php
 
$numero = $_POST["numero"];
 if( $numero == 0){

 $resultado = "número igual a zero";   
 }
 if( $numero >0){

 $resultado = "número positivo";   
 }
 else{
 $resultado = "número negativo";
 }
 
 echo $resultado;
 
 
 
 
 
 
 ?>
