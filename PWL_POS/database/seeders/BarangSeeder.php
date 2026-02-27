<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1 PT Indofood
            ['barang_id'=> 1, 'kategori_id'=> 1, 'barang_kode'=> 'BRG001', 'barang_nama'=> 'Indomie Goreng', 'harga_beli'=> 2500, 'harga_jual'=> 3000],
            ['barang_id'=> 2, 'kategori_id'=> 1, 'barang_kode'=> 'BRG002', 'barang_nama'=> 'Supermiie Ayam Bawang', 'harga_beli'=> 2500, 'harga_jual'=> 3000],
            ['barang_id'=> 3, 'kategori_id'=> 1, 'barang_kode'=> 'BRG003', 'barang_nama'=> 'Chitato Sapi Panggang', 'harga_beli'=> 8000, 'harga_jual'=> 10000],
            ['barang_id'=> 4, 'kategori_id'=> 2, 'barang_kode'=> 'BRG004', 'barang_nama'=> 'Pop Ice', 'harga_beli'=> 2000, 'harga_jual'=> 3000],
            ['barang_id'=> 5, 'kategori_id'=> 2, 'barang_kode'=> 'BRG005', 'barang_nama'=> 'Indomilk UHT', 'harga_beli'=> 5000, 'harga_jual'=> 6500],

            // Supplier 1 PT Paragon
            ['barang_id'=> 6, 'kategori_id'=> 3, 'barang_kode'=> 'BRG006', 'barang_nama'=> 'Wardah Lip Cream', 'harga_beli'=> 45000, 'harga_jual'=> 55000],
            ['barang_id'=> 7, 'kategori_id'=> 3, 'barang_kode'=> 'BRG007', 'barang_nama'=> 'Emina Bright Stuff', 'harga_beli'=> 30000, 'harga_jual'=> 40000],
            ['barang_id'=> 8, 'kategori_id'=> 3, 'barang_kode'=> 'BRG008', 'barang_nama'=> 'Make Over Powder', 'harga_beli'=> 60000, 'harga_jual'=> 75000],
            ['barang_id'=> 9, 'kategori_id'=> 4, 'barang_kode'=> 'BRG009', 'barang_nama'=> 'Wardah Hijab', 'harga_beli'=> 75000, 'harga_jual'=> 95000],
            ['barang_id'=> 10, 'kategori_id'=> 4, 'barang_kode'=> 'BRG010', 'barang_nama'=> 'Emina T-shirt', 'harga_beli'=> 50000, 'harga_jual'=> 65000],

            // Supplier 1 PT Electronic City
            ['barang_id'=> 11, 'kategori_id'=> 5, 'barang_kode'=> 'BRG011', 'barang_nama'=> 'Samsung LED 32 Inch', 'harga_beli'=> 2000000, 'harga_jual'=> 2300000],
            ['barang_id'=> 12, 'kategori_id'=> 5, 'barang_kode'=> 'BRG012', 'barang_nama'=> 'Sharp Rice Cooker', 'harga_beli'=> 350000, 'harga_jual'=> 450000],
            ['barang_id'=> 13, 'kategori_id'=> 5, 'barang_kode'=> 'BRG013', 'barang_nama'=> 'Philips Blender', 'harga_beli'=> 300000, 'harga_jual'=> 400000],
            ['barang_id'=> 14, 'kategori_id'=> 5, 'barang_kode'=> 'BRG014', 'barang_nama'=> 'Logitech Keyboard', 'harga_beli'=> 150000, 'harga_jual'=> 200000],
            ['barang_id'=> 15, 'kategori_id'=> 5, 'barang_kode'=> 'BRG015', 'barang_nama'=> 'Sony Headset', 'harga_beli'=> 250000, 'harga_jual'=> 320000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
