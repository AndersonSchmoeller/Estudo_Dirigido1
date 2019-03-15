<?php

    print "Quilometros percorrido: ";

    $km = (int) fgets (STDIN);

    print "Quantos dias: ";

    $days = (int) fgets (STDIN);

    $total = (60 * $days) + (0.15 * $km);

    print "Total a pagar $total \n\n\n";
