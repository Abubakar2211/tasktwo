<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            [
                'title' => 'First Title',
                'content' => 'This is my first content',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Title',
                'content' => 'This is my second content',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Title',
                'content' => 'This is my fhird content',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Four Title',
                'content' => 'This is my Four content',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
