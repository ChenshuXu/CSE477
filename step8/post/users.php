<?php
require '../lib/site.inc.php';

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$controller = new Felis\UsersController($site, $user, $_POST);
header("location: " . $controller->getRedirect());