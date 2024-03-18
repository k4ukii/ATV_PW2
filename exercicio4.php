<form action="exercicio4.php" method="post">
 Insira um Número  
 <input type =Number name = "numero"><br>
 Insira um Número 
 <input type =Number name = "numero1"><br>
 Insira um Número 
 <input type =Number name = "numero2"><br>
 
 <input type="submit" name ="verificar" value="verificar">

<?php
 
 $numero = $_POST["numero"];
 $numero1= $_POST["numero1"];
 $numero2 = $_POST["numero2"];

if ($numero == $numero1 || $numero == $numero2) {
    print "parabens você gerou um triânguloisoceles";
    echo '<img src="isoceles.png">';
}

if ($numero == $numero1 && $numero == $numero2) {
    print "parabens você gerou um triângulo equilatero";
    echo '<img src="equilatero.png">';
}
 
?>
