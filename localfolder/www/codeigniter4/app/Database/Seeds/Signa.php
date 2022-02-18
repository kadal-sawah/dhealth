<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Signa extends Seeder
{
    public function run()
    {
        $data = [
            'kode_signas' => 'SGN0001',
            'nama_signas' => '1 X Hari',
            'stok_signas' => 100,
            'keterangan' => 'Parasetamol Penurun Panas',
            'status' => 'active',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'created_by' => 1,
            'modified_by' => null,
        ];

        $this->db->table('signas')->insert($data);
    }
}
