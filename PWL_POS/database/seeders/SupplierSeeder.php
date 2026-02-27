<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id'=> 1, 'supplier_kode'=> 'SUP0001', 'supplier_nama'=> 'PT Indofood Sukses Makmur Tbk', 'supplier_alamat'=> 'Jakarta'
            ],
            [
                'supplier_id'=> 2, 'supplier_kode'=> 'SUP0002', 'supplier_nama'=> 'PT Paragon Technology and Innovation', 'supplier_alamat'=> 'Jakarta'
            ],
            [
                'supplier_id'=> 3, 'supplier_kode'=> 'SUP0003', 'supplier_nama'=> 'PT Electronic City Indonesia Tbk', 'supplier_alamat'=> 'Jakarta Selatan'
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
