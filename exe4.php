
 
 <?php
 
 $numero = $_POST["numero"];
 $numero1= $_POST["numero1"];
 $numero2 = $_POST["numero2"];



 if ($numero == $numero1 && $numero == $numero2) {
    print "parabens você gerou um triângulo equilatero";
    echo '<img src="equilatero.png">';
}
else if ($numero == $numero1 ) {
    print "parabens você gerou um triângulo isoceles";
 
    echo '<img src="isoceles.png">';
}
else if ($numero == $numero2) {
    print "parabens você gerou um triângulo isoceles";
 
    echo '<img src="isoceles.png">';

}

 else{
    print "parabens você gerou um triângulo escaleno";
    echo '<img src="escaleno.png">';
}
 
?>
