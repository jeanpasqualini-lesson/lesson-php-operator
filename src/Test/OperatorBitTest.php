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

class OperatorBitTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $a = 0x101010;
        $b = 0x101010;

        $this->printExport("\$a & \$b (and)", $a & $b);

        $this->printExport("\$a | \$b (ou) ", $a | $b);

        $this->printExport("\$a ^ \$b (ou exclusif)", $a ^ $b);

        $this->printExport("~\$a (negatif)", ~$a);

        $this->printExport("\$a << 1 (decalage gauche)", $a << 1);

        $this->printExport("\$a >> 1 (decalage droite)", $a >> 1);
    }
}