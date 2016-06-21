<?php

require  __DIR__ . '/autoload.php';

$user = new \App\Models\User();
$user->getEmail();



$view = new \App\View();
$view->title = 'Мой сайт!';
$view->users = \App\Models\User::findAll();

echo $view->render( __DIR__ . '/App/templates/index.php');









