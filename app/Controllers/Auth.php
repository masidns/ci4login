<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        //
        return view('Auth/signin');
    }

    public function register()
    {
        # code...
        return view('Auth/register');
    }
}
