<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testing extends BaseController
{
    public function index()
    {
        //
        $session = session();
        $data = [
            'user' => $session->get('username')
        ];
        return view('testing', $data);
    }
}
