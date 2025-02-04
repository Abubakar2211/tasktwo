<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('comment')->get();
        $data = $posts->map(function ($user) {
            return [
               'Post Title' => $user->title,
               'Post Content' => $user->content,
               'Post Comment' => $user->comment->map(fn($content) => $content->content)
            ];
        });
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = Post::create([
            'title' => 'New Title',
            'content' => 'New Content',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        $post->comments()->createMany([
            [
                'content' => 'New Comment',
                'user_id' => 1,
                'commentable_id' => $post->id,
                'commentable_type' => Post::class, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'New Latest Comment',
                'user_id' => 2,
                'commentable_id' => $post->id,
                'commentable_type' => Post::class, 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    
        return response()->json($post);
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
