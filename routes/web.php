<?php

use App\Config\Router\Router;

Router::get('/', 'HomeController:index');
Router::post('/cdn/upload', 'HomeController:upload');

Router::run();

if (Router::error()) {
    view('404');
}
