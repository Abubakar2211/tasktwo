<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Comment::insert([
            [
                'content' => 'Great post!',
                'user_id' => 1,
                'commentable_id' => 1,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Awesome post!',
                'user_id' => 2,
                'commentable_id' => 1,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Very informative, thanks!',
                'user_id' => 3,
                'commentable_id' => 1,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Loved this post!',
                'user_id' => 4,
                'commentable_id' => 1,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'content' => 'This was super helpful!',
                'user_id' => 2,
                'commentable_id' => 2,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Keep up the great work!',
                'user_id' => 3,
                'commentable_id' => 2,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Amazing content!',
                'user_id' => 4,
                'commentable_id' => 2,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'content' => 'Well written, keep it up!',
                'user_id' => 2,
                'commentable_id' => 3,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Really enjoyed reading this!',
                'user_id' => 3,
                'commentable_id' => 3,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'content' => 'Fantastic post, learned a lot!',
                'user_id' => 4,
                'commentable_id' => 4,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'content' => 'Great video! 🔥',
                'user_id' => 3,
                'commentable_id' => 1,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Awesome content! 🎬',
                'user_id' => 4,
                'commentable_id' => 1,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'content' => 'Very informative, thanks! 🙌',
                'user_id' => 2,
                'commentable_id' => 2,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Loved this video! ❤️',
                'user_id' => 4,
                'commentable_id' => 2,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Super helpful, keep it up! 👍',
                'user_id' => 1,
                'commentable_id' => 2,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            
            [
                'content' => 'Amazing editing! 🎥',
                'user_id' => 1,
                'commentable_id' => 3,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'content' => 'Well explained, learned a lot! 📚',
                'user_id' => 4,
                'commentable_id' => 3,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'content' => 'This deserves more views! 👏',
                'user_id' => 1,
                'commentable_id' => 4,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Really enjoyed watching this! 😊',
                'user_id' => 4,
                'commentable_id' => 4,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'content' => 'Fantastic work, waiting for more! 🚀',
                'user_id' => 3,
                'commentable_id' => 4,
                'commentable_type' => 'App\\Models\\Video',
                'created_at' => now(),
                'updated_at' => now(),
            ],
       ]);
    }
}
