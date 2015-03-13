<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 12:18 PM
 */

namespace Test;


class OperatorPrecedenceTest {
    public function runTest()
    {
        $this->printExport("", new \stdClass());
        $this->printExport("", [2]);
    }

    public function printExport($name, $data)
    {
        echo $name." : ".var_export($data, true).PHP_EOL;
    }
}