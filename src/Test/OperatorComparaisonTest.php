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

class OperatorComparaisonTest implements TestInterface {

    use printExport;

    public function runTest()
    {
        $this->printExport("'1' == 1", "1" == 1);
        $this->printExport("'1' === 1", "1" === 1);
        $this->printExport("1 != 1", 1 != 1);
        $this->printExport("1 <> 1", 1 <> 1);
        $this->printExport("1 !== 1", 1 !== 1);
        $this->printExport("1 < 1", 1 < 1);
        $this->printExport("1 > 1", 1 > 1);
        $this->printExport("1 <= 1", 1 <= 1);
        $this->printExport("1 >= 1", 1 >= 1);
    }

}