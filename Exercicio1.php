<?php


  print "Escreva o valor a ser convertido(em metros): ";
  $meters = (int) fgets (STDIN);
  $milimeters = $meters * 1000;
  print "O valor convertido em milimetros é: $milimeters";
