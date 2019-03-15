<?php

    print "Quantidade de cigarros fumados por dia: ";

    $cigarettes_per_day = (int) fgets (STDIN);

    print "Há quantos anos você fuma? ";

    $years = (int) fgets (STDIN);

    
    $cigarettes = $cigarettes_per_day*365*$years;
    
    $minutes_less = $cigarettes*10;
    $hours_less = $minutes_less/60;
    $days_lost = round($hours_less/24);
 
         print " \n Sua morte vira $days_lost dias mais cedo \n \n ";
