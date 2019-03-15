<?php


    print "Tamanho em metros quadrados: ";
    $area_to_paint = (float) fgets (STDIN);

    $liters = $area_to_paint / 6;
    //CAN
    $can_price = 80;
    $can_efficiency = 108; //18x6
    //GALLON
    $gallon_price = 25;
    $gallon_efficiency = 21.6; //3,6x6


    print "------------------------------------\n";
    print "|1 - Comprar apenas latas de 18L   |\n";
    print "|2 - Comprar apenas galões de 3,6L |\n";
    print "|3 - Misturar latas e galões       |\n";
    print "------------------------------------\n";

    $choose = (int) fgets (STDIN);
    
    //---A

if ($choose == 1) {
    
    $can_quant = ceil($area_to_paint / $can_efficiency);
    $can_cost = $can_quant * $can_price;

    print "LATAS: $can_quant VALOR: R$$can_cost \n\n\n";

}
    
    //---B

if ($choose == 2) {

    $gallon_quant = ceil($area_to_paint / $gallon_efficiency);
    $gallon_cost = $gallon_quant * $gallon_price;

    print "GALÃO: $gallon_quant VALOR: R$$gallon_cost \n\n\n";

}
 
    //---C

if (choose == 3) {

    

}

if ($choose < 1) or ($choose > 3) {

    print "Função inexistente!"

}
