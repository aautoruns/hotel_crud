<?php

namespace App\Controllers;

class Catatan extends BaseController
{
    public function bugs()
    {
        $data = [
            'title' => ' Bugs Report'
        ];
        return view('catatan/bugs', $data);
    }
    public function notes()
    {
        $data = [
            'title' => ' Notes Report'
        ];
        return view('catatan/notes', $data);
    }
}
