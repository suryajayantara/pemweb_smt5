<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Buku extends BaseController
{
    public function index()
    {
        echo "Hallo , Ini Adalah Controller Buku";
    }

    public function judul()
    {
        echo " Ini adalah method judul dari controller";
    }
}
