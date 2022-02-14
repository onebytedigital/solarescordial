<?php
$autoload = str_replace("\\","/",__DIR__."/vendor/autoload.php");
require ($autoload);
require ("config.php");

$app = new \SolaresCordial\App();

$app->run();