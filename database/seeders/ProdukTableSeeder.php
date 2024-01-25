<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert(array(
            ['nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => '2000'],
            ['nama_produk' => 'Shampoo Sunsilk', 'harga_jual' => '4000']
        ));
    }
}
