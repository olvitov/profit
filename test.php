<?php

require __DIR__ . '/autoload.php';

$s =  \App\Singleton::instance();
$s->counter = 1;
var_dump($s);
