<?php

use App\Config\Router\Router;

Router::get('/', 'HomeController:index');
Router::post('/cdn/upload', 'HomeController:upload');
Router::get('/files/{id}', 'HomeController:getbanner');

Router::get('/terms', fn() => view('terms'));
Router::get('/politics-privacy', fn() => view('politics-privacy'));
Router::get('/contact', fn() => view('contact'));

Router::run();

if (Router::error()) {
    view('404');
}
