<form action="exercicio5.php" method="post">
 Pedra Papel ou Tesoura? (1,2 ou 3) 
 <input type ="number" name = "jogador"><br>
 
 <input type="submit" name ="verificar" value="verificar">

<?php
 $maquina = rand (1,3);
 $jogador = $_POST["jogador"];

 
 
if ($jogador == 1)
{
    $rp = "Pedra";
}
 else if ($jogador == 2)
{
    $rp = "Papel";
}
else 
{
    $rp = "Tesoura";
}

if ($Maquina == 1)
{
    $rp1 = "Pedra";
}
 else if ($Maquina== 2)
{
    $rp1 = "Papel";
}
else 
{
    $rp1 = "Tesoura";
}
 if ($maquina==1 && $jogador== 1)
{
    $rp3 = "empate";
}
else if ($maquina==3 && $jogador== 1)
{
    $rp3 = "Parabéns você venceu";
}
else if ($maquina==2 && $jogador== 2)
{
    $rp3 = "Parabéns você venceu";
}
else if ($maquina==2 && $jogador== 3)
{
    $rp3 = "Parabéns você venceu";
}

else {
    $rp3 = "você perdeu "; 
}


echo "sua ecolha foi",$rp, "contra ",$rp1,"   ",$rp3 ;
?>


