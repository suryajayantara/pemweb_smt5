<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Buku extends BaseController
{
    public function index()
    {
        return view('tampil_buku');
    }

    public function tampilBuku()
    {
        return view('buku/tampil_buku');
    }

    public function page()
    {
        echo view('header');
        echo view('content');
        echo view('footer');
    }
    public function catalogBuku1()
    {
        $data = [
            'judul_buku' => 'Belajar Code Igniter 4'
        ];

        return view('catalog_buku1', $data);
    }
    public function catalogBuku2()
    {
        $data = [
            'header_buku' => 'Catalog Buku',
            'penerbit' => 'Andi Yogyakarta',
            'judul_buku' => [
                'Belajar CodeIgniter 3',
                'Belajar PHP dan MySql',
                'Belajar Laravel',
                'Belajar Java'
            ],
        ];

        return view('catalog_buku2', $data);
    }
}
