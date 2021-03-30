<?php

namespace Database\Seeders;
use DB;

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
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Pocari Sweat',
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50'
            ],
            [
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Silverqueen',
                'kategori_barang' => 'Snack',
                'harga' => '12500',
                'qty' => '45'
            ],
            [
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Mangga',
                'kategori_barang' => 'Buah',
                'harga' => '20000',
                'qty' => '150'
            ],
            [
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Roti Sisir',
                'kategori_barang' => 'Makanan',
                'harga' => '2500',
                'qty' => '200'
            ],
            [
                'kode_barang' => 'PRD006',
                'nama_barang' => 'Fanta',
                'kategori_barang' => 'Minuman',
                'harga' => '3500',
                'qty' => '80'
            ],
            [
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Oreo',
                'kategori_barang' => 'Snack',
                'harga' => '10500',
                'qty' => '85'
            ],
            [
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Semangka',
                'kategori_barang' => 'Buah',
                'harga' => '16500',
                'qty' => '60'
            ],
            [
                'kode_barang' => 'PRD009',
                'nama_barang' => 'Samyang',
                'kategori_barang' => 'Makanan',
                'harga' => '22500',
                'qty' => '35'
            ],
            [
                'kode_barang' => 'PRD010',
                'nama_barang' => 'Sprit',
                'kategori_barang' => 'Minuman',
                'harga' => '2500',
                'qty' => '90'
            ],
            [
                'kode_barang' => 'PRD011',
                'nama_barang' => 'Chocolatos',
                'kategori_barang' => 'Snack',
                'harga' => '1500',
                'qty' => '65'
            ],
            [
                'kode_barang' => 'PRD012',
                'nama_barang' => 'Melon',
                'kategori_barang' => 'Buah',
                'harga' => '25000',
                'qty' => '55'
            ],
            [
                'kode_barang' => 'PRD013',
                'nama_barang' => 'Sari Roti',
                'kategori_barang' => 'Makanan',
                'harga' => '4500',
                'qty' => '160'
            ],
            [
                'kode_barang' => 'PRD014',
                'nama_barang' => 'Coca Cola',
                'kategori_barang' => 'Minuman',
                'harga' => '3000',
                'qty' => '130'
            ],
            [
                'kode_barang' => 'PRD015',
                'nama_barang' => 'Lays',
                'kategori_barang' => 'Snack',
                'harga' => '11000',
                'qty' => '250'
            ],
            [
                'kode_barang' => 'PRD016',
                'nama_barang' => 'Kelengkeng',
                'kategori_barang' => 'Buah',
                'harga' => '22000',
                'qty' => '70'
            ],
            [
                'kode_barang' => 'PRD017',
                'nama_barang' => 'Bubur Sun',
                'kategori_barang' => 'Makanan',
                'harga' => '5000',
                'qty' => '120'
            ],
            [
                'kode_barang' => 'PRD018',
                'nama_barang' => 'Fruit Tea',
                'kategori_barang' => 'Minuman',
                'harga' => '3800',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD019',
                'nama_barang' => 'Piatos',
                'kategori_barang' => 'Snack',
                'harga' => '9800',
                'qty' => '58'
            ],
            [
                'kode_barang' => 'PRD020',
                'nama_barang' => 'Durian',
                'kategori_barang' => 'Buah',
                'harga' => '50000',
                'qty' => '43'
            ],
        ];
        DB::table('barang')->insert($data);
    }
}
