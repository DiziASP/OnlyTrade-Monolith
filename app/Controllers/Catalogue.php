<?php

namespace App\Controllers;

class Catalogue extends BaseController
{
    public function index()
    {
        helper('http');
        $response = http_request('https://onlytrade-single-service-production.up.railway.app/api/barang', null, null, "GET");
        $data = $response['data'];

        // Add perusahaan
        foreach ($data as $key => $value) {
            $response = http_request('https://onlytrade-single-service-production.up.railway.app/api/perusahaan/' . $value['perusahaan_id'], null, null, "GET");
            $data[$key]['perusahaan'] = $response['data']['nama'];
        }
        return view('catalogue', ['data' => $data]);
    }

    public function history(): string
    {
        return view('history');
    }

    public function detail($id)
    {
        helper('http');
        $response = http_request('https://onlytrade-single-service-production.up.railway.app/api/barang/' . $id, null, null, "GET");
        $data = $response['data'];

        // Add perusahaan
        $response = http_request('https://onlytrade-single-service-production.up.railway.app/api/perusahaan/' . $data['perusahaan_id'], null, null, "GET");
        $data['perusahaan'] = $response['data']['nama'];

        return view('detail', ['data' => $data]);
    }
}
