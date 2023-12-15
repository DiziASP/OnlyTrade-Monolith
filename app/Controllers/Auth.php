<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function register(): string
    {
        return view('register');
    }
    // public function login()
    // {
    //     $email = $this->request->getPost('email');
    //     $password = $this->request->getPost('password');

    //     $userModel = new \App\Models\UserModel();
    //     $user = $userModel->where('email', $email)->first();

    //     if ($user) {
    //         if (password_verify($password, $user['password'])) {
    //             $data = [
    //                 'id' => $user['id'],
    //                 'email' => $user['email'],
    //                 'name' => $user['name'],
    //                 'isLoggedIn' => true
    //             ];

    //             session()->set($data);
    //             return redirect()->to('/catalogue');
    //         } else {
    //             session()->setFlashdata('error', 'Wrong password');
    //             return redirect()->to('/auth');
    //         }
    //     } else {
    //         session()->setFlashdata('error', 'Email is not registered');
    //         return redirect()->to('/auth');
    //     }
    // }
}
