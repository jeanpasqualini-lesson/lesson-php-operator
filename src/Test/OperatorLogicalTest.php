<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 12:20 PM
 */

namespace Test;


use Interfaces\TestInterface;
use Traits\printExport;

class OperatorLogicalTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $a = 5;

        $b = 7;

        $this->printExport("\$a and \$b", $a and $b);
        $this->printExport("\$a or \$b", $a or $b);
        $this->printExport("\$a xor \$b ($a ou $b) mais pas les deux en meme temps (if (and, or == true) xor = false)", $a xor $b);
        $this->printExport("!\$a", !$a);
        $this->printExport("\$a && \$b", $a && $b);
        $this->printExport("\$a || \$b", $a || $b);
    }
}