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

class OperatorIncrementDecrementTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $a = 5;

        $this->printExport("Start value", $a);

        // Pre incremente
        $this->printExport("++\$a (incremnte puis retour a)", ++$a);

        // Post incremente
        $this->printExport("\$a++ (retourne a, puis increment)", $a++);

        // Pre decremente
        $this->printExport("--\$a (decrement puis retourne a)", --$a);

        // Post decremente
        $this->printExport("\$a-- (retourne a puis decrement)", $a--);

        $this->printExport("final Value", $a);

        $this->printExport("alphabet increment", implode(" ",
            iterator_to_array($this->generateAlphabet())
        ));

        // Les caractères digitaux réagissent différemment
        echo '== Caractères digitaux ==' . PHP_EOL;
        $d = 'A8';
        for ($n=0; $n<6; $n++) {
            echo ++$d . PHP_EOL;
        }
        $d = 'A08';
        for ($n=0; $n<6; $n++) {
            echo ++$d . PHP_EOL;
        }
    }

    public function generateAlphabet()
    {
        $start = "A";

        for($i = 0; $i < 26; $i++)
        {
            yield $start++;
        }
    }
}