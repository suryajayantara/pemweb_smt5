<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mahasiswa extends BaseController
{
    public function index()
    {
        echo " Hello , Ini adalah controller Mahasiswa";
    }

    public function name($nama, $nim)
    {
        echo "Nama Saya adalah " . $nama . " dan Nim saya " . $nim;
    }

    protected function samplePrivate()
    {
        echo "Ini adalah contoh Private Method";
    }

    public function testingPrivate()
    {
        return $this->samplePrivate();
    }
}
