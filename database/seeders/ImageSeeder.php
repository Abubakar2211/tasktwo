<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::insert([
            [
                'url' => 'www.Laptop.com',
                'imageable_id' => '1',
                'imageable_type' => 'App\\Models\\User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'www.Laptop.com',
                'imageable_id' => '1',
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'www.Smartphone.com',
                'imageable_id' => '2',
                'imageable_type' => 'App\\Models\\User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'www.Smartphone.com',
                'imageable_id' => '2',
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'www.Headphones.com',
                'imageable_id' => '3',
                'imageable_type' => 'App\\Models\\User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'www.Headphones.com',
                'imageable_id' => '3',
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'www.Camera.com',
                'imageable_id' => '4',
                'imageable_type' => 'App\\Models\\User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'www.Camera.com',
                'imageable_id' => '4',
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
