    <?php
     # Números criados dentro de uma array
     $idades = array(12,21,37,16,19,14,26,9,15,18,18,16,33);
           
      for ($cont=0;$cont<count($idades);$cont++)
            {
             if ($idades[$cont]<18) {
                    //echo $idades[$cont]."<br>";
                    $cont_menor18= $cont_menor18+1;
             } else {
                    $cont_maior18= $cont_maior18+1;
             }
             
            
            }
   
       echo "Das idades de $idades[0],$idades[1],$idades[2],$idades[3],$idades[4],$idades[5],$idades[6],$idades[7],$idades[8],$idades[9],$idades[10],$idades[11] e $idades[12] anos, sabemos que $cont_maior18 são maiores de idade e $cont_menor18 são menores de idades.";