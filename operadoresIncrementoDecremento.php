<?php

/* Los operadores de incremento y decremento sólo afectan a números y strings, sin afectar a arrays yobjects 
Decrementar un valor NULL no tiene efecto, pero si se incrementa se obtiene 1. */

/*  Operador	Efecto
    ++$x	    Incrementa $x en 1 y luego devuelve $x
    $x++	    Retorna $x, y luego incrementa $x en 1
    --$x	    Decrementa $x en 1, y luego retorna $x
    $x--	    Retorna $x, y luego decrementa $x en 1 */


    $x = 4;
    echo "Esto es 4: " . $x++ . "</br>";
    echo "Y esto es 5: " . $x . "</br>";

    $x = 4;
    echo "Esto es 5: " . ++$x . "</br>";
    echo "Y esto es 5: " . $x . "</br>";

    $x = 4;
    echo "Esto es 4: " . $x-- . "</br>";
    echo "Y esto es 3: " . $x . "</br>";

?>