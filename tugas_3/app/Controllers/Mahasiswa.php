<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mahasiswa extends BaseController
{
    public function index()
    {
        echo "Hallo , Ini adalah method index pada Controller Mahasiswa";
    }

    public function addMahasiswa()
    {
        echo "Hello , Ini adalah Method addMahasiswa pada Controller Mahasiswa";
    }

    public function updateMahasiswa($nim)
    {
        echo "Hello , Ini adalah Method updateMahasiswa pada Controller Mahasiswa";
    }
    public function deleteMahasiswa($nim)
    {
        echo "Hello , Ini adalah Method deleteMahasiswa pada Controller Mahasiswa";
    }
    public function profilMahaisiswa($nama, $usia)
    {
        echo "Hello , Ini adalah Method profilMahaisiswa pada Controller Mahasiswa";
    }
}
