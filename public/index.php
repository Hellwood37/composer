<?php

require_once '../vendor/autoload.php';

use App\Wcs\Hello;

$codeDeMerde = new Hello;

echo $codeDeMerde->talk();

use HelloWorld\SayHello;

$merciLouis = new SayHello;

echo $merciLouis->world();