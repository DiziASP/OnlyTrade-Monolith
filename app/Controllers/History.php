<?php

namespace App\Controllers;

class History extends BaseController
{
    public function index(): string
    {
        $data['template'] = 'history';
        return view('history', $data);
    }
}
