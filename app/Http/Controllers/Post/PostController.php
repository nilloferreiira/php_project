<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showCreate()
    {
        return view('components.posts.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'text' => 'required|string|max:255',
        ]);

        try {
            Post::create([
                'title' => $request->title,
                'text' => $request->text,
                'posted_by' => auth()->user()->id
            ]);

            return redirect()->route('home')->with('success',  'Post created successfully!');
        } catch (\Exception $e) {

            return redirect()->route('home')->with('error', 'Error creating post!');
        }
    }
}
