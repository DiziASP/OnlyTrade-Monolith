<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use \Firebase\JWT\JWT;

class Auth extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function loginAction()
    {
        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if (is_null($user)) {
            return redirect()->to('/auth/login');
        }

        $pwd_verify = md5($password) == $user['password'];

        if (!$pwd_verify) {
            return redirect()->to('/auth/login');
        }

        $key = getenv('JWT_SECRET');
        $iat = time(); // current timestamp value
        $exp = $iat + 3600;

        $payload = array(
            "iss" => "Issuer of the JWT",
            "aud" => "Audience that the JWT",
            "sub" => "Subject of the JWT",
            "iat" => $iat, //Time the JWT issued at
            "exp" => $exp, // Expiration time of token
            "id" => $user['id'],
        );

        $token = JWT::encode($payload, $key, 'HS256');

        $response = [
            'status'   => 200,
            'messages' => 'Login successfully',
            'data'     => [
                'token' => $token,
                'id' => $user['id'],
            ],
        ];

        // Store the JWT
        session()->set('token', $token);

        return redirect()->to('/');
    }

    public function registerAction()
    {
        $rules = [
            'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[users.email]'],
            'password' => ['rules' => 'required|min_length[8]|max_length[255]'],
            'confirm_password'  => ['label' => 'confirm password', 'rules' => 'matches[password]']
        ];


        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'name'    => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => md5($this->request->getVar('password'))
            ];
            $model->save($data);

            return redirect()->to('/auth/login');
        } else {
            // If email already exist
            return $this->respond([
                'status'   => 400,
                'messages' => $this->validator->getErrors(),
            ], 400);
        }
    }

    public function logoutAction()
    {
        session()->destroy();

        return redirect()->to('/auth/login');
    }
}
