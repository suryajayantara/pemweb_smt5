<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anggota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_anggota'	=> [
                'type'	=> 'INT',
                'constraint'	=> 11,
                'unsigned'	=> true,
                'auto_increment' => true,
            ],
            'nama'	=> [
                'type'	=> 'VARCHAR',
                'constraint'	=> '50',
            ],
            'tempat_lahir' => [
                'type'	=> 'VARCHAR',
                'constraint'	=> '20',
            ],
            'tanggal_lahir' => [
                'type'	=> 'DATE'
            ],
            'jenis_kelamin'	=> [
                'type'	=> 'ENUM',
                'constraint'	=> "'pria','wanita'",
            ],	
            'no_telp' => [	
                'type'	=> 'VARCHAR',
                'constraint'	=> '15',
            ],	
            'alamat' => [	
                'type'	=> 'VARCHAR',
                'constraint'	=> '255',
            ],	
            'created_at' => [	
                'type'	=> 'DATETIME',
                'null'	=> true,
            ],	
            'updated_at' => [	
                'type'	=> 'DATETIME',
                'null'	=> true,
            ]	
        ]);
        $this->forge->addPrimaryKey('id_anggota');
        $this->forge->createTable('tb_anggota');
    }

    public function down()
    {
        //
    }
}
