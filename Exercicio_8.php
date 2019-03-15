<?php
  
  print "Quantos cigarros você fuma por dia??";
  $cigarros_fumados     = (int) fgets(STDIN);
   
  $cigarros_fumados = $cigarros_fumados*365*3 ;
  $minutos_perdidos = $cigarros_fumados*10;
  $horas_perdidas   = $minutos_perdidos/60;
  $dias_perdidos    = round ($horas_perdidas/24);
  
  print "você perdeu $dias_perdidos dias de vida";