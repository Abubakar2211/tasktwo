<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::insert([
            [
                'title' => 'First Title',
                'url' => 'www.laptop.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Title',
                'url' => 'www.camera.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Title',
                'url' => 'www.Smartphone.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Four Title',
                'url' => 'www.headphone.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
