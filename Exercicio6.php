<?php

    print "Digite uma temperatura(Celsius) pra ser convertida para Fahrenheit: ";

    $celsius = (float) fgets (STDIN);

    $fahren = 9 * $celsius/5 + 32;

    print "$fahren °F";
