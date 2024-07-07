<?php

namespace App\Controllers;

class HomeController
{
    public function __construct() {
    }

    /**
     * @return void
     */
    public function index(): never
    {
        view('home');
    }

    public function upload(): never
    {
        dd($_FILES);



    }

}
