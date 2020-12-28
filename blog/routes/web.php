<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ListArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
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

//  TODO : organize this file - remove unneeded routes 

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/articles', [ArticlesController::class, 'index']);    
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
Route::get('/articles/{article}/edit' , [ArticlesController::class, 'edit']);
Route::get('/articles/{article}/update', [ArticlesController::class, 'update']); 
Route::get('/articles/{article}/delete', [ArticlesController::class, 'delete']);

Route::get('/articles/list_article/{list_article}', [ListArticlesController::class, 'show_list_articles']); // show

// all articles 
// Route::get('articles/show_all_articles', [ArticlesController::class, 'show_all_articles']);

// all list articles 


// route to contact view
Route::get('/contact', [ContactController::class, 'show']);
 
Route::post('/contact', [ContactController::class, 'store_and_send'])->name('contact.store_and_send');

//  todo : refactor this - return articles from controller - not this file -- done
//  todo : once I am creating articles through create view then I will test too see if this method is working properly 
Route::get('/about', [ArticlesController::class, 'about']);

// this method will be removed once testing is complete
// Route::get('/about', function(){
//     return view('about', [
//         'articles' => $articles = App\Models\Article::take(3)->latest('created_at')->get()
//     ]);
// });

// admin login view 
Route::get('/admin', [LoginController::class, 'show']);
Route::post('/admin', [LoginController::class, 'login'])->name('login');


// Create articles
Route::get('/create_normal_article', [ArticlesController::class, 'create_normal_article'])->name('create_normal_article');
Route::post('/create_normal_article', [ArticlesController::class, 'store_normal_article'])->name('store_normal_article');

Route::get('/create_list_article', [ListArticlesController::class, 'create_list_article'])->name('create_list_article');
Route::post('/create_list_article', [ListArticlesController::class, 'store_list_article'])->name('store_list_article');

