<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 


Route::get('/posts', function(){
    return view('blog');
});

Route::get('posts/{post}', [PostsController::class, 'show']);

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/about', function(){
    return view('about', [
        'articles' => $articles = App\Models\Article::latest('created_at')->get()->take(3)
    ]);
});

Route::get('/test', function(){
    return view('test');
});