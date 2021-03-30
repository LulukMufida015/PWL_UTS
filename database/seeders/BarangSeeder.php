<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_barang' => '1',
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'id_barang' => '2',
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Pocari Sweat',
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50'
            ],
            [
                'id_barang' => '3',
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Silverqueen',
                'kategori_barang' => 'Snack',
                'harga' => '12500',
                'qty' => '45'
            ],
            [
                'id_barang' => '4',
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Mangga',
                'kategori_barang' => 'Buah',
                'harga' => '20000',
                'qty' => '100'
            ],
            [
                'id_barang' => '1',
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
        ];
    }
}
