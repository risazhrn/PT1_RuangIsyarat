<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
        $data = [
            'title' => 'Login | Ruang Isyarat', 
        ];
        return view('auth/login', $data);
    }

    public function register() 
    {
        return view('auth/register');
    }


    public function save()
    {
        
        $validation = $this->validate([
            'name'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Your full name is required'
                ]
                ],
            'email'=>[
                'rules'=> 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required'=>'Email is required',
                    'valid_email'=>'You must enter a valid email',
                    'is_unique'=>'Email already taken'
                ]
                ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required'=>'Password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have characters more than 12 in length'
                ]
                ],
            'cpassword'=>[
                'rules'=>'required|min_length[5]|max_length[12]|matches[password]',
                'errors' => [
                    'required'=>'Confirm password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have characters more than 12 in length',
                    'matches'=>'Confirm password not matches to password'
                    ]
                ]
        ]);

        if(!$validation){
            return view('auth/register', ['validation'=> $this ->validator]);
        }else{
            
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'name'=>$name,
                'email'=>$email,
                'password'=>Hash::make ($password),
            ];

            $usersModel = new \App\Models\UsersModel();
            $query = $usersModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail', 'something went wrong');
                // return redirect()->to('register')->with('fail', 'something went wrong');
            }else{
                return redirect()->to('auth')->with('success', 'You are now registered successfully!');
            }
        };

        }

        public function check()
        {

            $validation = $this->validate([
                'email'=>[
                'rules'=> 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required'=>'Email is required',
                    'valid_email'=>'You must enter a valid email',
                    'is_unique'=>'Email already taken',
                    'is_not_unique'=> 'This email is not registered on our service'
                ]
                ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required'=>'Password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have characters more than 12 in length'
                ]
                ]
            ]);

            if($validation){
                return view('auth/login',['validation'=>$this->validator]);
            }else {
                $session = session();
                $usersModel = new UsersModel();
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $user_info = $usersModel->where('email', $email)->first();
                if($user_info){
                    $pass = $user_info['password'];
                    $verify_pass = password_verify($password, $pass);
                    if($verify_pass){
                        $data = [
                            'id' =>$user_info['id'],
                            'name' =>$user_info['name'],
                            'email'=>$user_info['email'],
                            'logged_in' => TRUE
                        ];
                        $session->set($data);
                        return redirect()->to('/kelas')->with('success', 'Selamat Datang ' . $user_info['name'] . ' di Ruang Kelas Isyarat !');
                    }else{
                        return redirect()->back()->with('fail', 'Kata sandi yang anda masukan salah!');	
                    }return redirect()->to('/auth');
                }}}

                public function logout()
                {
                    $session = session();
                    $session->destroy();
                    return redirect()->to('pages');
                }
                
            };
            
            