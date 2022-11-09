<?php
include "controller/ConsoleController.php";

if (count($argv) >= 1) {
    $ctrl = new ConsoleController();
    $methodName = $argv[1];
    if (method_exists($ctrl, $methodName)) {
        $ctrl->$methodName($argv[2]);
    } else {
        $ctrl->help();
    }
}
