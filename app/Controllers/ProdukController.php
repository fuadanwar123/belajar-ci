<?php

namespace App\Controllers;

class ProdukController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'   => 'Daftar Produk',
            'menu'    => 'produk',
            'submenu' => 'list',
        ];
        return view('v_produk', $data);
    }
}
