<?php

namespace App\Controllers;

use App\Config\Router\Router;
use App\Services\ContactService;

class ContactController
{
    private ContactService $contactService;

    public function __construct()
    {
        $this->contactService = new ContactService();
    }

    /**
     * @return void
     */
    public function index()
    {
        view('contact');
    }

    public function create($request): void
    {
        $this->contactService->create($request);

        Router::redirect('/thank-you');
    }

}
