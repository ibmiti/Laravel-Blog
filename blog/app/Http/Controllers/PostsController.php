<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [ '0' => 'yes i am first',
                    '1' => 'why yes i am second'
    ];
        if (! array_key_exists($post, $posts)){
            abort(404, 'Sorry that post was not found.');
        }
    
        return view('post', 
        [
            'post' => $posts[$post]
        ]
    );

    }
}
