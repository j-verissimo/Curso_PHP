<?php

// Cria a array com nome dos planetas
$planetas = array("1-Mercúrio", "2-Vênus","3-Terra","4-Marte","5-Júpiter","6-Saturno","7-Urano","8-Netuno");

//Com a função array_reverse invertemos a ordem dos dados da array
$planetas_inversa = array_reverse($planetas);

//Realizamos um loop para exibir o nome dos planetas em ordem inversa
for ($i=0; $i<count($planetas) ; $i++) { 
	print_r($planetas_inversa[$i]."<br>");
}
?>