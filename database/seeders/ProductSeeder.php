<?php

namespace Database\Seeders;

use App\Models\Product;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Camera',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
