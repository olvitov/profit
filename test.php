<?php

require __DIR__ . '/autoload.php';

$authors = \App\Models\Author::findAll();
$news = \App\Models\News::findAll();

var_dump($authors);
var_dump($news);
