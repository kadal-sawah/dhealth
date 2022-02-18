<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Time;

class Obat extends Seeder
{
    public function run()
    {
        // helper('date');
        $data = [
            'kode_obat' => 'OBT0003',
            'nama_obat' => 'Parasetamol',
            'stok_obat' => 100,
            'keterangan' => 'Parasetamol Penurun Panas',
            'status' => 'active',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'created_by' => 1,
            'modified_by' => null,
        ];

        $this->db->table('obats')->insert($data);
    }
}
