<?php

require __DIR__.'/src/Autoload.php';

$autoload = new \Carlos\Autoload;
$autoload->register();

$autoload->addNamespace('Carlos', 'src');