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
                'title' => 'Laptop',
                'price' => '1200',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Smartphone',
                'price' => '800',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Headphones',
                'price' => '150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Camera',
                'price' => '1500',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
