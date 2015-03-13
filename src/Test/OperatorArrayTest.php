<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 12:21 PM
 */

namespace Test;


use Interfaces\TestInterface;
use Traits\printExport;

class OperatorArrayTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $a = array(1 => "un", 2 => "deux", 3 => "trois");

        $b = array(4 => "quatre", 5 => "cinq", 6 => "six");

        $c = $a + $b;

        $this->printExport("\$a + \$b (fusion par clef) ss", $c);

        $this->printExport("\$a == \$b (meme paire clef valeur)", $a == $b);

        $this->printExport("\$a === \$b (meme paire clef valeur, meme ordre, meme type)", $a === $b);

        $this->printExport("\$a != \$b", $a != $b);

        $this->printExport("\$a <> \$b", $a <> $b);

        $this->printExport("\$a !== \$b", $a !== $b);
    }
}