<?php

   print "Digite quantos dias:";
   $dias = fgets (STDIN);

   print "Digite quantas horas:";
   $horas = fgets (STDIN);

   print "Digite quantos minutos:";
   $minutos = fgets (STDIN);

   print "Digite quantos segundos:";
   $segundos = fgets (STDIN);

   $total_dias    = $dias   * 86.400;
   $total_horas   = $horas  * 3.600; 
   $total_minutos = $minutos * 60;

   $total_segundos = $total_dias + $total_horas + $total_minutos + $segundos;

   print "O total desses valores em segundos é de $total_segundos segundos. ";