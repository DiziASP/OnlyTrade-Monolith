<?php

namespace App\Controllers;

class Catalogue extends BaseController
{
    public function index()
    {
        helper('http');
        $response = http_request('https://onlytrade-single-service-production.up.railway.app/api/barang', null, null, "GET");
        $data = $response['data'];
        return view('catalogue', ['data' => $data]);
    }

    public function history(): string
    {
        return view('history');
    }
}
