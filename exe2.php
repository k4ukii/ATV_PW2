<?php
 
$numero = $_POST["numero"];
 if( $numero == 0){

 $resultado = "número igual a zero";   
 }
 else if ($numero%3==0){

 $resultado = "número impar";
 }
 else{
 $resultado = "número par";
 }
 
 
 
 
 
  echo $resultado;
 
 
 ?>

