<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        return view('index', ['name' => 'Babe']);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $attribute = request()->validate([
            'user_id' => 'required|exists:users,id', // Validate that user_id exists in the users table
            'title' => 'required|max:255',
            'slug' => 'nullable|unique:posts|regex:/^[a-zA-Z0-9\-_]+$/',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($attribute);

        return redirect('/')->with('success', 'Your post created successfully!');

    }
}

