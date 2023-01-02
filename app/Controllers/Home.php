<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Hotel Oblivion'
        ];

        return view('home/index', $data);
    }
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard blank'
        ];

        return view('home/dashboard', $data);
    }
    public function review()
    {
        $data = [
            'title' => 'Review & Critics'
        ];

        return view('home/review', $data);
    }
}
