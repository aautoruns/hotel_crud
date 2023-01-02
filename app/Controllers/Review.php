<?php

namespace App\Controllers;

class Review extends BaseController
{
    public function review()
    {
        $data = [
            'title' => 'Review & Critics'
        ];

        return view('review/index', $data);
    }
}
