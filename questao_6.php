<?php
 # Números criados dentro de uma array
 $numeros = array(18,22,19,23,25,28,32,17,41,25);
 #Inicia a variavel que vai receber a soma dos números
 $soma_numeros=0;
 # Monta-se uma estrtura de repetição para ir somando os números
 for($cont=0;$cont<count($numeros);$cont++){
  $soma_numeros=$numeros[$cont]+$soma_numeros;
  }
 # Calcula a média e imprime na tela
 $media=$soma_numeros/10;
 echo "A média dos 10 números criados é igual a $media";
?>
