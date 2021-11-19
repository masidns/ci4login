<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{

    protected $usersModel;
    public function __construct()
    {
        //Do your magic here
        $this->usersModel = new UsersModel();
    }


    public function index()
    {
        //
        // helper(['form']);
        $data = [];
        return view('Auth/signin', $data);
        // return view('Auth/layout');
    }

    public function login()
    {
        // session() = session();

        // $usersModel = new UsersModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $this->usersModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $cekpassword = password_verify($password, $pass);
            if ($cekpassword) {
                $cekdata = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'level' => $data['level'],
                    'isLoggedIn' => TRUE
                ];

                session()->set($cekdata);
                return redirect()->to('/Testing');
            } else {
                session()->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        } else {
            session()->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }

    public function logout()
    {
        # code...
        session()->destroy();
        return redirect()->to('/signin');
    }

    public function register()
    {
        # code...
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Auth/register', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username tidak boleh kosong',
                    'is_unique' => 'Username sudah ada'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'is_unique' => 'Email sudah ada'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Password tidak boleh kosong',
                    'min_length' => 'Minimal panjang karakter 5',
                ]
            ],
            'retypepassword' => [
                'rules' => 'required|min_length[5]|matches[password]',
                'errors' => [
                    'required' => 'Password tidak boleh kosong',
                    'min_length' => 'Minimal panjang karakter 5',
                    'matches' => 'password tidak sama!',
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        };

        $this->usersModel->save([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'level' => 2,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);
        return redirect()->to('/signin');
    }
}
