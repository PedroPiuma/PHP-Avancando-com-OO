<?php

require __DIR__ . '/src/Autoload.php';

$autoload = new PedroPiuma\Autoload;
$autoload->register();
$autoload->addNamespace('PedroPiuma', 'src');
