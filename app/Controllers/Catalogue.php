<?php

namespace App\Controllers;

class Catalogue extends BaseController
{
    public function index(): string
    {
        return view('catalogue');
    }
}
