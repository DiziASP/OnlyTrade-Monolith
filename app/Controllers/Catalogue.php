<?php

namespace App\Controllers;

class Catalogue extends BaseController
{
    public function index(): string
    {
        $data['template'] = 'catalogue';
        return view('catalogue', $data);
    }
}
