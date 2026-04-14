<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'  => 'Dashboard',
            'menu'   => 'home',
        ];
        return view('v_home', $data);
    }
}
