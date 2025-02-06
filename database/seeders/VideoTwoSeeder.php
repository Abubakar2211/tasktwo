<?php

namespace Database\Seeders;

use App\Models\VideoTwo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VideoTwo::insert([
            [
                'title' => 'Video one'
            ],
            [
                'title' => 'Video Two'
            ],
            [
                'title' => 'Video Three'
            ],
            [
                'title' => 'Video Four'
            ],
            [
                'title' => 'Video Five'
            ],
        ]);
    }
}
