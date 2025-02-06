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

 
    

    public function store(Request $request)
    {

        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'comments' => 'nullable|array',
            'comments.*.content' => 'required|string',
            'comments.*.user_id' => 'required|exists:users,id',
        ]);

        $post = Post::create([
            'title' => $validator['title'],
            'content' => $validator['content']
        ]);
        if (!empty($validator['comments'])) {
            foreach ($validator['comments'] as $comment) {
                $post->comments()->create([
                    'content' => $comment['content'],
                    'user_id' => $comment['user_id'],
                    'commentable_id' => $post->id,
                    'commentable_type' => Post::class
                ]);
            }
        }
        return response()->json($post->load('comments'), 201);
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
