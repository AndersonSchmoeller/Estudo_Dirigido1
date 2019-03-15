<?php


  print "Valor do produto: ";
  $value = (float) fgets (STDIN);

  print "Qual o  percentual de desconto? ";
  $off = (int) fgets (STDIN);

  $value_off = $value * $off / 100;
  $topay_value = $value + $value_off;

  print "Valor do desconto: $value_off \n\n\n";
  print "Valor total: $topay_value \n\n\n";
