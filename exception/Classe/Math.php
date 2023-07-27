<?php 

namespace Classe;

use ArithmeticError;
use Exception;

class Math {

    public function division(int|float $a, int|float $b): int|float
    {
        if( $b === 0 ) {
            throw new ArithmeticError("Division par 0 impossible");
        }

        return $a / $b;
    }

}