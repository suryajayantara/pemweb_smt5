<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        //
    }

    public function insertData()
    {
        $buku = new BukuModel();

        try {
            $query = $buku->insert([
                'judul_buku' => 'Belajar Codeigniter 3',
                'penerbit' => 'Andi Yogyakarta',
                'tahun_terbit' => 2020,
                'harga' => 51000,
                'penulis' => 'Dandi Sumarno'
            ]);

            if ($query) {
                echo "Data Berhasil di Insert";
            } else {
                echo print_r($buku->errors());
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateData($id)
    {
        $buku = new bukuModel();
        try {
            $query = $buku->update($id, [
                'judul_buku' => 'Belajar Codeigniter 4',
                'penerbit' => 'Andi Yogyakarta',
                'tahun_terbit' => '2021',
                'harga' => '60000',
                'penulis' => 'Dandi Sumarno'
            ]);
            if ($query) {
                echo "Data Berhasil diupdate";
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
