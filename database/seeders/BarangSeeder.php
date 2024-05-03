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
        DB::table('barang')->insert([
            [
                'kode_barang' => 'BRG001',
                'nama_barang' => 'Beras 5kg',
                'harga_barang' => '50000',
                'deskripsi_barang' => 'Beras putih premium',
                'kode_satuan' => 'SAT001'
            ],
            [
                'kode_barang' => 'BRG002',
                'nama_barang' => 'Minyak Goreng 2L',
                'harga_barang' => '20000',
                'deskripsi_barang' => 'Minyak goreng merk A',
                'kode_satuan' => 'SAT002'
            ],
        ]);
    }
}
