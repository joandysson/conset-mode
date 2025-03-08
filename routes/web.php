<?php

use App\Config\Router\Router;

Router::post('/cdn/upload', 'HomeController:upload');
Router::get('/files/{id}', 'HomeController:getBanner');

Router::prefix('/' . getPrefixLang());

Router::get('/', 'HomeController:index');

Router::get('/laws', fn() => view( 'laws'));
Router::get('/why-use', fn() => view( 'why-use'));
Router::get('/cookies', fn() => view( 'cookies'));
Router::get('/generator', fn() => view( 'generator'));

Router::get('/terms', fn() => view('terms'));
Router::get('/politics-privacy', fn() => view('politics-privacy'));
Router::get('/contact', 'ContactController:index');
Router::post('/contact', 'ContactController:create');
Router::get('/about', fn() => view('about'));
Router::get('/thank-you', fn() => view('thank-you'));

Router::run();

if (!in_array(prefixLang(), [LANG_PT, LANG_EN, LANG_FR, LANG_ES])) {
    Router::redirect('/' . getPrefixLang());
}

if (Router::error()) {
    http_response_code(404);
    view('404');
}
