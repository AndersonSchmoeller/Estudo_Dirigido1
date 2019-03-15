<?php

    print "Distância(km) a ser percorrida: ";

    $distance = (float) fgets (STDIN);

    print "Velocidade média(km/h)? ";

    $speed = (int) fgets (STDIN);

    $time = $distance / $speed;

    print "O tempo de viagem é de $time horas \n\n\n";
