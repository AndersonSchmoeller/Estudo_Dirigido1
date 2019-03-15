<?php

    print "Digite o valor do salário: ";

    $salario = (float) fgets (STDIN);

    print "Qual a porcentagem do aumento: ";

    $aumento = (float) fgets (STDIN);

    $novosalario = $salario + (($salario/100) * $aumento);

    print "NOVO SALÁRIO: $novosalario \n\n\n";
