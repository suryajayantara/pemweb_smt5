<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint'     => 255,
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint'     => 255,
            ],
            'tahun_terbit' => [
                'type' => 'YEAR',
                'constraint'     => 4,
            ],
            'harga' => [
                'type' => 'FLOAT',
                'constraint'     => 4,
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint'     => 50,
            ],
            'created_at' => [
                'type'      => 'DATETIME',
                'ON UPDATE CURRENT_TIMESTAMP' => TRUE,
            ],
            'updated_at' => [
                'type'      => 'DATETIME',
                'ON UPDATE CURRENT_TIMESTAMP' => TRUE,
            ],
            'deleted_at' => [
                'type'      => 'DATETIME',
                'ON UPDATE CURRENT_TIMESTAMP' => TRUE,
            ]
        ]);


        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('tb_buku', TRUE);
    }

    public function down()
    {
        //
    }
}
