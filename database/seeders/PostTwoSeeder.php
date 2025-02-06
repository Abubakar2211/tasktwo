<?php

namespace Database\Seeders;

use App\Models\PostTwo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostTwo::insert([
            [   
                'title' => 'First post'
            ],
            [   
                'title' => 'Second post'
            ],
            [   
                'title' => 'Third post'
            ],
            [   
                'title' => 'Four post'
            ],
            [   
                'title' => 'Five post'
            ]
        ]);
    }
}
