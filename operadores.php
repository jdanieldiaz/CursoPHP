<?php

    $x = 10;
    $x += 2;
    // $x vale ahora <1

    $y = "Hola ";
    $y .= ", Bienvenido";
    
    // $y vale ahora "Hola, Bienvenido"


    /*El operador básico de asignación es "=", que actúa como definidor.
      El valor de una expresión de asignación es el valor que se le ha asignado, 
      esto es: "$x = 10" tiene un valor de 10. */

      echo 'La variable x: ' . $x;
      echo '<br>';
      echo 'Saludo: ' . $y; 

      //El . se utiliza en PHP para concatenar.