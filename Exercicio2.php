<?php



print "Digite o número de dias: ";

$days = (int) fgets(STDIN);

print "Digite o número de horas: ";

$hours = (int) fgets(STDIN);

print "Digite o número de minutos: ";

$minutes = (int) fgets(STDIN);

print "Digite o número de segundos: ";

$seconds = (int) fgets(STDIN);

$segdias = $dias*86400;

$seghoras = $horas*3600;

$segmin = $min*60;

$secperd = $segdias+$seghoras+$segmin+$seg;

print "O total de segundos perdidos é de $secperd \n";
