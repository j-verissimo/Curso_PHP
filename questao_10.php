<?php

//Digita uma data e guarda na variavel $data
$data="2021-12-06";

//Divide a data em partes e salva nas variaveis $dia, $mes e $ano
$dia = date( 'd', strtotime( $data ) );
$mes = date( 'm', strtotime( $data ) );
$ano = date( 'Y', strtotime( $data ) );

// Mostra na tela separadamente dia, mês e ano.
echo "Dia: $dia "."<br>";
echo "Mês: $mes "."<br>";
echo "Ano: $ano "."<br>";
?>