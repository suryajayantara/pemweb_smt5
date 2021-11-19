<?php

namespace App\Database\Seeds;

use App\Models\Anggota;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AnggotaFakerSeeder extends Seeder
{
    public function run()
    {

        $anggota = new Anggota();
        $faker = \Faker\Factory::create('id_ID');

        // Looping Faker 
        for($i = 0 ; $i < 200; $i++){

            // Gender Random Faker
            $jk = $faker->randomElement(['pria','wanita']);
            $gender = $jk === 'pria' ? 'male' : 'female';

            $data = [
                'nama' => $faker->name($gender),
                'tempat_lahir' => $faker->cityName,
                'tanggal_lahir' => $faker->date('Y-m-d','now'),
                'email' => $faker->email,
                'jenis_kelamin' => $jk,
                'no_telp' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'created_at' => Time::now(),
            ];

            $anggota->insert($data);
        }

    }
}
