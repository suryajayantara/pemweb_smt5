<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kd_buku'	=> [
                'type'	=> 'INT',
                'constraint'	=> 11,
                'unsigned'	=> true,
                'auto_increment' => true,
            ],
            'judul_buku'	=> [
                'type'	=> 'VARCHAR',
                'constraint'	=> '255',
            ],
            'penerbit' => [
                'type'	=> 'VARCHAR',
                'constraint'	=> '100',
            ],
            'tahun_terbit' => [
                'type'	=> 'YEAR'
            ],
            'harga'	=> [
                'type'	=> 'FLOAT',
            ],		
            'penulis' => [	
                'type'	=> 'VARCHAR',
                'constraint'	=> '50',
            ],	
            'created_at' => [	
                'type'	=> 'DATETIME',
                'null'	=> true,
            ],	
            'updated_at' => [	
                'type'	=> 'DATETIME',
                'null'	=> true,
            ],	
            'deleted_at' => [	
                'type'	=> 'DATETIME',
                'null'	=> true,
            ]	
        ]);
        $this->forge->addPrimaryKey('kd_buku');
        $this->forge->createTable('tb_buku');
    }

    public function down()
    {
        //
    }
}
