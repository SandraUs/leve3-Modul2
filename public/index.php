<?php

require '../vendor/autoload.php';

$templates = new League\Plates\Engine('../app/views');



$route = $_SERVER['REQUEST_URI'];


if ($route == '/'){
    echo $templates->render('homepage', ['name' => 'Jonathan']);
}
elseif ($route == '/about'){
    echo $templates->render('about', ['content' => 'page about']);
}










