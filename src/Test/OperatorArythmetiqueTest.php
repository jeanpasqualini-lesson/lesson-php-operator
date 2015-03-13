<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 12:18 PM
 */

namespace Test;


use Interfaces\TestInterface;
use Traits\printExport;

class OperatorArythmetiqueTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $a = 2;
        $b = 5;

        $this->printExport("-\$a", -$a);
        $this->printExport("\$a + \$b", $a + $b);
        $this->printExport("\$a - \$b", $a - $b);
        $this->printExport("\$a * \$b", $a * $b);
        $this->printExport("\$a / \$b", $a / $b);
        $this->printExport("\$a % \$b", $a % $b);
        $this->printExport("\$a ** \$b", $a ** $b);
    }
}