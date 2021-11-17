<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomePage extends BaseController
{
    public function index()
    {
        //
        // session();
        $session = session();
        // echo "Hello : " . $session->get('name');
        $data = [
            'tess' => $session->get('email')
        ];
        return view('home', $data);
    }
}
