<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::insert([
            [
                'tag' => 'horror'
            ],
            [
                'tag' => 'Comedy'
            ],
            [
                'tag' => 'Action'
            ],
            [
                'tag' => 'Drama'
            ],
            [
                'tag' => 'Sci-Fi'
            ],
        ]);
    }
}
