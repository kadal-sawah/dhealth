<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function beranda($data = null)
    {
        $data = [];
        $data['content'] = 'beranda';
        // return view('layouts/content', $data, ['cache' => 120]);
        return view('layouts/content', $data);
    }

}
