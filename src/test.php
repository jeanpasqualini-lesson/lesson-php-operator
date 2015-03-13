<?php

require_once("../vendor/autoload.php");

define("ROOT_DIR", __DIR__);

$tests = array(
    new \Test\OperatorAffectionTest(),
    new \Test\OperatorArrayTest(),
    new \Test\OperatorArythmetiqueTest(),
    new \Test\OperatorBitTest(),
    new \Test\OperatorComparaisonTest(),
    new \Test\OperatorControlErrorTest(),
    new \Test\OperatorExecutionTest(),
    new \Test\OperatorIncrementDecrementTest(),
    new \Test\OperatorLogicalTest(),
    new \Test\OperatorPrecedenceTest(),
    new \Test\OperatorStringTest(),
    new \Test\OperatorTypeTest()
);

foreach($tests as $test)
{
    echo "=== ".get_class($test)." ===".PHP_EOL;

    if($test instanceof \Interfaces\TestInterface) $test->runTest();
}