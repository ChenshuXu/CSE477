<?php
//require __DIR__ . '/lib/guessing.inc.php';
require 'lib/guessing.inc.php';
$controller = new Guessing\GuessingController($guessing, $_POST);
if($controller->isReset()) {
    unset($_SESSION[GUESSING_SESSION]);
}

header("location: guessing.php");
exit;