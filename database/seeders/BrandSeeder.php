<?php

namespace Database\Seeders;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BrandSeeder extends Seeder
{
    
    public function run()
    {
        $data = [
            ['name' => 'APPLE'],
            ['name' => 'SAMSUNG'],
            ['name' => 'OPPO'],
            ['name' => 'REDMI'],
            ['name' => 'VIVO'],
            ['name' => 'ASUS'],
            ['name' => 'HUAWEI'],
            ['name' => 'REALME'],
        ];

        foreach ($data as $value) {
            Brand::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

       
    }
}