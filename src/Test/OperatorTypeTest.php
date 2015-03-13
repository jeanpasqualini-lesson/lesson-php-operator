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

class OperatorTypeTest implements TestInterface {

    use printExport
    {
        /**printExport::printExport insteadof printExport;*/
        printExport::printExport as printExportUseTest;
    }

    public function runTest()
    {
        $a = new \stdClass();

        $this->printExport("\$a instanceof \\stdClass", $a instanceof \stdClass);
    }
}