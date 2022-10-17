<?php

namespace App\Controllers;

class Kelas extends BaseController
{
    public function index()
    {
        $session = session();
        $usersModels = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $user_info = $usersModels->find($loggedUserID);
        $data = [
            'title' => 'Katalog Kelas | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => 'active',
            'linkc' => '',
            'user_info'=> $user_info
        ];

        if(!$user_info){
            return redirect()->to('auth/login');
        }else {

            return view('kelas/index', $data);
        }
    }

    public function videopage_a()
    {
        $data = [
            'title' => 'Kelas | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => 'active',
            'linkc' => '',
        ];
        return view('kelas/videopage_a', $data);
    }

    public function videopage_b()
    {
        $data = [
            'title' => 'Kelas | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => 'active',
            'linkc' => '',
        ];
        return view('kelas/videopage_b', $data);
    }

    public function videopage_c()
    {
        $data = [
            'title' => 'Kelas | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => 'active',
            'linkc' => '',
        ];
        return view('kelas/videopage_c', $data);
    }

    public function videopage_d()
    {
        $data = [
            'title' => 'Kelas | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => 'active',
            'linkc' => '',
        ];
        return view('kelas/videopage_d', $data);
    }

    public function videopage_e()
    {
        $data = [
            'title' => 'Kelas | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => 'active',
            'linkc' => '',
        ];
        return view('kelas/videopage_e', $data);
    }

    public function videopage_f()
    {
        $data = [
            'title' => 'Kelas | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => 'active',
            'linkc' => '',
        ];
        return view('kelas/videopage_f', $data);
    }
}
?>