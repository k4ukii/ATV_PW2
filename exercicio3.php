<form action="exercicio3.php" method="post">
 Insira um Número (a)  
 <input type =Number name = "numero"><br>
 Insira um Número (b) <input type =Number name = "numero1"><br>
 
 <input type="submit" name ="verificar" value="verificar">
 
 <?php
 
$numero = $_POST["numero"];
$numero1= $_POST["numero1"];
 if( $numero > $numero2){

 $resultado = "A maior que B";
 }

 else{
 $resultado = "A menor que B";
 }
 
 
 
 
 
 
 
 
 ?>
 verificação: <input type="text" value= $resultado >
 </form>
