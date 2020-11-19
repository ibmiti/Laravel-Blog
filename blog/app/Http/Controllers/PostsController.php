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
    
        // $post = DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->first();
        
        if (! $post) {
            abort(404);
        }

        return view('post', 
        [
            'post' => $post
        ]
    );

    }
}
