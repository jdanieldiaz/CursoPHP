<?php

/* Los operadores de incremento y decremento sólo afectan a números y strings, sin afectar a arrays y objects. 
Decrementar un valor NULL no tiene efecto, pero si se incrementa se obtiene 1. */

/*  Operador	Efecto
    ++$x	    Incrementa $x en 1 y luego devuelve $x
    $x++	    Retorna $x, y luego incrementa $x en 1
    --$x	    Decrementa $x en 1, y luego retorna $x
    $x--	    Retorna $x, y luego decrementa $x en 1 */


    $x = 10;
    echo "Esto es 10: " . $x++ . "</br>";
    echo "Y esto es 11: " . $x . "</br>";

    $x = 10;
    echo "Esto es 11: " . ++$x . "</br>";
    echo "Y esto es 11: " . $x . "</br>";

    $x = 10;
    echo "Esto es 10: " . $x-- . "</br>";
    echo "Y esto es 9: " . $x . "</br>";

?>