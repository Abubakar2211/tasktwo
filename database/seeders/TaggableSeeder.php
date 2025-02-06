<?php

namespace Database\Seeders;

use App\Models\PostTwo;
use App\Models\Taggable;
use App\Models\VideoTwo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaggableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Taggable::insert([
            [
                'tag_id' => '1',
                'taggable_id' => '1',
                'taggable_type' => PostTwo::class,
            ],
            [
                'tag_id' => '1',
                'taggable_id' => '2',
                'taggable_type' => PostTwo::class,
            ],
            [
                'tag_id' => '1',
                'taggable_id' => '3',
                'taggable_type' => VideoTwo::class,
            ],

            [
                'tag_id' => '2',
                'taggable_id' => '1',
                'taggable_type' => PostTwo::class,
            ],
            [
                'tag_id' => '2',
                'taggable_id' => '2',
                'taggable_type' => VideoTwo::class,
            ],
            [
                'tag_id' => '2',
                'taggable_id' => '3',
                'taggable_type' => PostTwo::class,
            ],
            [
                'tag_id' => '2',
                'taggable_id' => '4',
                'taggable_type' => VideoTwo::class,
            ],
            [
                'tag_id' => '2',
                'taggable_id' => '5',
                'taggable_type' => PostTwo::class,
            ],

            [
                'tag_id' => '3',
                'taggable_id' => '1',
                'taggable_type' => VideoTwo::class,
            ],
            [
                'tag_id' => '3',
                'taggable_id' => '4',
                'taggable_type' => PostTwo::class,
            ],
            [
                'tag_id' => '3',
                'taggable_id' => '5',
                'taggable_type' => PostTwo::class,
            ],

            
        ]);
    }
}
