<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data  = [];

        for ($penjualan = 1; $penjualan <= 10; $penjualan++) {
            for ($i = 1; $i <= 3; $i++) {
                
                $barang_id = rand(1, 15);

                $data[] = [
                    'penjualan_id'=> $penjualan,
                    'barang_id'=> $barang_id,
                    'harga'=> DB::table('m_barang')->where('barang_id', $barang_id)->value('harga_jual'),
                    'jumlah'=> rand(1, 5),
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
