<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Signa extends Migration
{
    public function up()
    {
        $forge = \Config\Database::forge();
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_signa'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
                'unique' => true,
            ],
            'nama_signa' => [
                'type' => 'varchar',
                'constraint' => 250,
                'null' => true,
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['active','unactive'],
                'default' => 'active'
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'created_by' => [
                'type' => 'integer',
                'constraint'  => 5,
                'unsigned'  => true,
                'null' => true,
            ],
            'modified_by' => [
                'type' => 'integer',
                'constraint' => 5,
                'unsigned'  => true,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('signas', false, $attributes);
    }

    public function down()
    {
        $this->forge->dropTable('signas', false, true);
    }
}
