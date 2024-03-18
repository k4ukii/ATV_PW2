<form action="exercicio2.php" method="post">
 Insira um Número: <input type =Number name = "numero"><br>
 
 <input type="submit" name ="verificar" value="verificar">
 
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
 
 
 
 
 
 
 
 
 ?>
 verificação: <input type="text" value= $resultado >
 </form>
