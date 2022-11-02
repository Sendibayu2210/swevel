<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
class Auth extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }

    public function auth()
    {
        $payment = $this->request->getVar('payment');

        if(session()->get('swevel_email')){            
            return redirect('dashboard');
        }
        $data = [
            'title' => 'Login',
            'payment' => $payment
        ];
        return view('swevel/auth', $data);
    }

    public function verifikasi_login(){
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $payment = $this->request->getVar('payment');
        
        $user = $this->UsersModel->where('email',$email)->first();
        if($user){
            if(password_verify($password,$user['password'])){
                $data = [
                    'swevel_email' => $user['email'],
                    'swevel_level' => $user['level'],
                    'swevel_logged_in' => true,
                ];
                session()->set($data);
                if($payment != ''){
                    $redirect = 'payment/'.$payment;
                }else{
                    $redirect = 'dashboard';
                }
                return json_encode([
                    'code' => '200',
                    'message' => 'login success',
                    'redirect'  => $redirect,
                ]);
            }else{
                return json_encode([
                    'code' => '404',
                    'message' => 'password salah',                
                ]);
            }
        }else{
            return json_encode([
                'code' => '404',
                'message' => 'email tidak ditemukan',                
            ]);
        }        
    }

    public function verifikasi_register(){
        $data = [
            'nama' => htmlspecialchars($this->request->getVar('fullname')),            
            'email' => htmlspecialchars($this->request->getVar('email')),            
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'level' => 'pengguna',
            'foto' => 'default_pengguna.jpg',
        ];
        $save = $this->UsersModel->insert($data);
        if($save){
            return json_encode([
                'code' => '200',
                'message' => 'success',
                'redirect' => 'dashboard'
            ]);
        }else{
            return json_encode([
                'code' => '500',
                'message' => 'error',                
            ]);
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }
}
