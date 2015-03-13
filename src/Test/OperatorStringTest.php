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

class OperatorStringTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $this->printExport('"Hello"." "."World !"', "Hello"." "."World !");
    }
}