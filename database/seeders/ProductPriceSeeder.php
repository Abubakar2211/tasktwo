<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductPrice::insert([
            [
                'price' => '8000',
                'priceable_id' => '1',
                'priceable_type' => Product::class
            ],
            [
                'price' => '9000',
                'priceable_id' => '1',
                'priceable_type' => Product::class
            ],
            [
                'price' => '10000',
                'priceable_id' => '1',
                'priceable_type' => Product::class
            ],

            [
                'price' => '2000',
                'priceable_id' => '2',
                'priceable_type' => Product::class
            ],
            [
                'price' => '200',
                'priceable_id' => '2',
                'priceable_type' => Product::class
            ],           [
                'price' => '6000',
                'priceable_id' => '2',
                'priceable_type' => Product::class
            ],

            [
                'price' => '6000',
                'priceable_id' => '3',
                'priceable_type' => Product::class
            ],
            [
                'price' => '10000',
                'priceable_id' => '4',
                'priceable_type' => Product::class
            ],
        ]);
    }
}
