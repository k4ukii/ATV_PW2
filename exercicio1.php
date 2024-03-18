<form action="exercicio1.php" method="post">
 Insira um Número: <input type =Number name = "numero"><br>
 
 <input type="submit" name ="verificar" value="verificar">
 
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
 
 
 
 
 
 
 
 
 ?>
 verificação: <input type="text" value= $resultado >
 </form>
