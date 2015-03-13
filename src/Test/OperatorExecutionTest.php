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

class OperatorExecutionTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $this->printExport("`ls -al`", `ls -al`);
    }

}