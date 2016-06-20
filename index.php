<?php

use App\Models\User;

require __DIR__ . '/autoload.php';



$user = new User();
$user->name = 'Olvit';
$user->email = 'olvit@mail.ru';
$user->insert();


