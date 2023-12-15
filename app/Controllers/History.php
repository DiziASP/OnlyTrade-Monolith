<?php

namespace App\Controllers;

class History extends BaseController
{
    public function index(): string
    {
        $riwayatBarang = [
            [
                'idBarang' => '1',
                'namaBarang' => 'Laptop Lenovo',
                'perusahaanBarang' => 'Lenovo Corp',
                'hargaBarang' => '20.000.000',
                'tanggalBeli' => '02/04/2023'
            ],
            [
                'idBarang' => '2',
                'namaBarang' => 'Macbook Air',
                'perusahaanBarang' => 'Apple Corp',
                'hargaBarang' => '15.000.000',
                'tanggalBeli' => '02/04/2023'
            ],
            [
                'idBarang' => '3',
                'namaBarang' => 'Asus ROG',
                'perusahaanBarang' => 'Asus Corp',
                'hargaBarang' => '22.000.000',
                'tanggalBeli' => '02/04/2023'
            ],
            [
                'idBarang' => '4',
                'namaBarang' => 'Asus TUF',
                'perusahaanBarang' => 'Asus Corp',
                'hargaBarang' => '11.000.000',
                'tanggalBeli' => '02/04/2023'
            ],
            [
                'idBarang' => '5',
                'namaBarang' => 'HP Omen',
                'perusahaanBarang' => 'HP Corp',
                'hargaBarang' => '12.000.000',
                'tanggalBeli' => '02/04/2023'
            ],
        ];
        $data['template'] = 'history';
        $data['riwayatBarang'] = $riwayatBarang;
        return view('history', $data);
    }
}
