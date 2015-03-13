<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 12:19 PM
 */

namespace Test;


use Interfaces\TestInterface;
use Traits\printExport;

class OperatorControlErrorTest implements TestInterface {

    use printExport;

    public function runTest()
    {
           $this->printExport("@\$undefinedVariable", @$undefinedVariable);
    }
}