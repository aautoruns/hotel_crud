<?php

namespace App\Controllers;

class Cetak extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Cetak Data'
        ];

        return view('cetak/index', $data);
    }
}
