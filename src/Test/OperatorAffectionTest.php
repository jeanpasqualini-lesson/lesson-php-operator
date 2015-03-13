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

class OperatorAffectionTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $this->printExport("\$a = (\$b = 4) + 5", $a = ($b = 4) + 5);

        $b = "Bonjour";

        $this->printExport("\$b .= \" tout le monde ! \"", ($b .= " tout le monde"));

        $a = 3;
        $b = &$a;
        $a = 4;

        $this->printExport("\$b = &\$a; \$a = 4;", $b);
    }
}