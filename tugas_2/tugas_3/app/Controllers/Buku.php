<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Buku extends BaseController
{
    public function index()
    {
        echo "Halo , Ini adalah Controller Buku <a href='" . route_to('judul') . "'> Link ke Route Judul </a>";
    }

    public function judul()
    {
        echo "Ini adalah Method judul yang ada di Controller Buku";
    }

    public function getBuku($id)
    {
        echo "ini adalah Method untuk mendapatkan data buku , ID Buku : $id";
    }

    public function getJudulBuku($title)
    {
        echo "ini Adalah Method untuk mendapatkan Judul Buku , Judul Buku : $title";
    }
}
