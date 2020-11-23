<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug)
    {
    
        return view('posts', 
        [
            'posts' => Post::where('slug', $slug)->firstOrFail()
        ]
    );

    }
}
