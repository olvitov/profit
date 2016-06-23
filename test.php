<?php

require __DIR__ . '/autoload.php';

// $authors = \App\Models\Author::findAll();
$news = \App\Models\News::findAll();

var_dump($news[2]->author);


