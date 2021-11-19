<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AnggotaSeeder extends Seeder
{
    public function run()
    {
        //Personal Seeder / Tanpa Faker 
        $data = [ 		
            [
                'nama'	=> 'Darma wijaya',
                'tempat_lahir' => 'Denpasar',
                'tanggal_lahir' => '1990-01-01',
                'email' => 'wijaya@gmail.com',
                'jenis_kelamin' => 'pria',                
                'no_telp'	=> '08123835457234',
                'alamat'	=> 'Jl.Gatot Subroto No. 70 Denpasar',
                'created_at' => Time::now()	
            ],
            [
                'nama'	=> 'Setyaningrum',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1995-01-05',
                'email' =>  'setyaningrum@gmail.com',
                'jenis_kelamin' => 'wanita',
                'no_telp'	=> '0812974648846',
                'alamat'	=> 'Jl.S Parman No. 54 Jakarta',
                'created_at' => Time::now()	
            ]
        ];
        $this->db->table('tb_anggota')->insertBatch($data);
    }
}
