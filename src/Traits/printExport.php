<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 1:33 PM
 */

namespace Traits;


trait printExport {

    public function printExport($name, $data)
    {
        echo $name." : ".var_export($data, true).PHP_EOL;
    }

}