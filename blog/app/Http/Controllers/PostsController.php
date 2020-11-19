<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug)
    {
    //     $posts = [ '0' => 'yes i am first',
    //                 '1' => 'why yes i am second'
    // ];
    
        $post = \DB::table('posts')->where('slug', $slug)->first();

        dd($post);

        if (! array_key_exists($post, $posts)){
            // I could return an image here instead of an 404 page
            abort(404, 'Sorry that post was not found.');
        }
    
        return view('post', 
        [
            'post' => $posts[$post]
        ]
    );

    }
}
