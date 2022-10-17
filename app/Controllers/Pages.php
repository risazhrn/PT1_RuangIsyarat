<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $usersModels = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $user_info = $usersModels->find($loggedUserID);
        $data = [
            'title' => 'Home | Ruang Isyarat', 
            'linka' =>'active',
            'linkb' => '',
            'linkc' => '',
            'user_info'=> $user_info
        ];
        return view('pages/home', $data);
    }

    public function blog()
    {
        
        $data = [
            'title' => 'Blog | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => '',
            'linkc' =>'active'
        ];
        return view('pages/blog-main', $data);
    }

    public function blog_a()
    {
        
        $data = [
            'title' => 'Blog | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => '',
            'linkc' =>'active'
        ];
        return view('pages/blog_a', $data);
    }

    public function blog_b()
    {
        
        $data = [
            'title' => 'Blog | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => '',
            'linkc' =>'active'
        ];
        return view('pages/blog_b', $data);
    }

    public function blog_c()
    {
        
        $data = [
            'title' => 'Blog | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => '',
            'linkc' =>'active'
        ];
        return view('pages/blog_c', $data);
    }

    public function blog_d()
    {
        
        $data = [
            'title' => 'Blog | Ruang Isyarat', 
            'linka' =>'',
            'linkb' => '',
            'linkc' =>'active'
        ];
        return view('pages/blog_d', $data);
    }
}
