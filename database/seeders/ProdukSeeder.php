<?php

namespace Database\Seeders;

use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
   
    public function run()
    {
        $data = [
            ['name' => 'Iphone 14 Pro Max', 'deskripsi' => 'Hp keluaran terbaru', 'harga' => 'Rp.25.000.000', 'produk_id' => 1],
            ['name' => 'Redmi Note 11 Pro', 'deskripsi' => 'Hp gaming harga terjangkau', 'harga' => 'Rp.5.000.000', 'produk_id' => 4],
            ['name' => 'Oppo A52', 'deskripsi' => 'Cocok untuk asa yang suka foto', 'harga' => 'Rp.4.000.000', 'produk_id' => 3],
            ['name' => 'Samsung S10', 'deskripsi' => 'Hp flasgship keren', 'harga' => 'Rp.20.000.000', 'produk_id' => 2],
        ];

        foreach ($data as $value) {
            Produk::insert([
                'name' => $value['name'],
                'deskripsi' => $value['deskripsi'],
                'harga' => $value['harga'],
                'produk_id' => $value['produk_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
}