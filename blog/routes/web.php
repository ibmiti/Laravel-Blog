<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
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


// Route::get('/posts', function(){
//     return view('blog');
// });

// Route::get('/posts', [PostsController::class, 'show']);

// Route::get('posts/{post}', [PostsController::class, 'show']);

Route::get('/articles', [ArticlesController::class, 'index']);    
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
Route::get('/articles/{artcle}/create', [ArticlesController::class, 'create']);
Route::get('/articles/{artcle}/store', [ArticlesController::class, 'store']);
Route::get('/articles/{artcle}/edit' , [ArticlesController::class, 'edit']);
Route::get('/articles/{artcle}/update', [ArticlesController::class, 'update']); 
Route::get('/articles/{artcle}/delete', [ArticlesController::class, 'delete']);


Route::get('/contact', function(){ 
    return view('contact');
 });
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/about', function(){
    return view('about', [
        'articles' => $articles = App\Models\Article::take(3)->latest('created_at')->get()
    ]);
});

