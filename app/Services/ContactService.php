<?php

namespace App\Services;

use App\Models\Contact;

class ContactService {

    private Contact $contact;

    public function __construct() {
        $this->contact = new Contact();
    }

    public function create(array $data) {
        return $this->contact->create([
            'name' => $data['name'],
            'email' =>  $data['email'],
            'message' => $data['message'],
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}