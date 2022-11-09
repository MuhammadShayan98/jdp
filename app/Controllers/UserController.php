<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use PhpParser\Node\Expr\Print_;

class UserController extends BaseController
{


    public function index()
    {
        return view('User_login');
    }

    public function login()
    {

        $session = session();
        $userModel = new UserModel();

        // $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // $data = $userModel->where('email', $email)->first();
        $data = $userModel->login_user($email, $password);
        // var_dump($data);
        // die;
        if ($data) {

            // $pass = $data['password'];
            $pass = $data->password;

            
            // $authenticatePassword = password_verify($password, $pass);
            // if($authenticatePassword){
            if ($pass == $password) {

                $ses_data = [
                    'id' => $data->user_id,
                    'email' => $data->email,
                    'role_name' => $data->role_name,
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
