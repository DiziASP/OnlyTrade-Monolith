<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function index(): string
    {
        $data['template'] = 'detail';
        return view('detail', $data);
    }
}
