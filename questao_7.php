    <?php
     # Números criados dentro de uma array
     $numero = array(10,21,5,95,33);
     #Inicia a variavel que vai receber o valor de comparação. Iniciamos com a primeira array.
     $maior=$numero[0];
     #Inicio das comparações / processamento
      if ($maior<$numero[1]) {
             $maior=$numero[1];
      }
      if ($maior<$numero[2]) {
             $maior=$numero[2];
       }
        if ($maior<$numero[3]) {
                 $maior=$numero[3];
      }

      if ($maior<$numero[4]) {
             $maior=$numero[4];
      }
      // Mostra na tela o resultado da comparação
      echo "Dentre os números $numero[0], $numero[1], $numero[2], $numero[3] e $numero[4] o maior deles é o $maior";