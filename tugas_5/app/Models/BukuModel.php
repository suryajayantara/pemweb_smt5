<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table                = 'tb_buku';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'judul_buku',
        'penerbit',
        'tahun_terbit',
        'harga',
        'penulis'
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'judul_buku' => 'required|min_length[5]',
        'penerbit' => 'required|min_length[5]',
        'tahun_terbit' => 'required|numeric',
        'harga' => 'required|numeric',
        'penulis' => 'required|min_length[5]',

    ];
    protected $validationMessages   = [
        'judul_buku' => [
            'required' => "Bagian Judul Buku Harus di Isi !",
            'min_lenght' => "Judul Buku Minimal 5 Karakter !",
        ],
        'penerbit' => [
            'required' => "Bagian Nama Penerbit Buku Harus di Isi !",
            'min_lenght' => "Nama Penerbit Buku Minimal 5 Karakter !",
        ],
        'tahun_terbit' => [
            'required' => "Tahun Terbit tidak boleh kosong !",
            'numerik' => "Tahun Terbit harus berupa Angka",
        ],
        'harga' => [
            'required' => "Harga tidak boleh kosong !",
            'numerik' => "Harga harus berupa Angka",
        ],
        'penulis' => [
            'required' => "Bagian Nama Penulis Buku Harus di Isi !",
            'min_lenght' => "Nama Penulis Buku Minimal 5 Karakter !",
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
}
