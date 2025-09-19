<?php

namespace App\Controllers;

use App\Models\User;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');


        $model = new User();
        $user = $model->where('username', $username)->first();
        if ($user && $password === $user['password']) {
            $session->set([
                'logged_in' => true,
                'username' => $user['username']
            ]);
            return redirect()->to('/admin/dashboard');
        }


        $session->setFlashdata('error', 'Usuario o contraseña incorrectos');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
