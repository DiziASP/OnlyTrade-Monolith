<?php

namespace App\Controllers;

use App\Models\HistoryModel;
use App\Models\UserModel;
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

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

    public function history()
    {

        $historyModel = new HistoryModel();

        $key = getenv('JWT_SECRET');

        $user = JWT::decode(session()->get('token'), new Key($key, 'HS256'));

        // get all history
        $data = $historyModel->where('user_id', $user->id)->findAll();

        return view('history', ['data' => $data]);
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

    public function buyAction()
    {
        helper('http');

        $historyModel = new HistoryModel();

        $amount = $this->request->getVar('amount');
        $total = $this->request->getVar('price') * $amount;

        $key = getenv('JWT_SECRET');

        $user = JWT::decode(session()->get('token'), new Key($key, 'HS256'));

        $data = [
            'user_id' => $user->id,
            'amount' => $amount,
            'total' => $total,
        ];

        $historyModel->insert($data);

        return redirect()->to('/');
    }
}
