<?php

namespace App\Controllers;

class Catalogue extends BaseController
{
    public function index(): string
    {
        $barang = [
            [
                'namaBarang' => 'Laptop Lenovo',
                'perusahaanBarang' => 'Lenovo Corp',
                'hargaBarang' => '20.000.000',
                'stokBarang' => 50,
            ],
            [
                'namaBarang' => 'Macbook Air',
                'perusahaanBarang' => 'Apple Corp',
                'hargaBarang' => '15.000.000',
                'stokBarang' => 100,
            ],
            [
                'namaBarang' => 'Asus ROG',
                'perusahaanBarang' => 'Asus Corp',
                'hargaBarang' => '22.000.000',
                'stokBarang' => 20,
            ],
            [
                'namaBarang' => 'Asus TUF',
                'perusahaanBarang' => 'Asus Corp',
                'hargaBarang' => '11.000.000',
                'stokBarang' => 30,
            ],
        ];
        $data['template'] = 'catalogue';
        $data['barang'] = $barang;

        return view('catalogue', $data);
    }
}
