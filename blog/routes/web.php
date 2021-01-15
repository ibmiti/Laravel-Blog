<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ListArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BabyArticlesController;
use App\Http\Controllers\KidsArticlesController;
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

/*
|---------------------------------------------------------------------------
| Home | Welcome Route
|---------------------------------------------------------------------------
| will potentialy add more routes 
*/
Route::get('/', function () {
    return view('home');
}); 

/*
|--------------------------------------------------------------------------
|  User related Routes to their resources
|--------------------------------------------------------------------------
*/
Route::get('/admin', [LoginController::class, 'show']);
Route::post('/admin', [LoginController::class, 'login'])->name('login');

/*
|---------------------------------------------------------------------------
| About related routes
|---------------------------------------------------------------------------
*/
Route::get('/about', [ArticlesController::class, 'about']);

/*
|--------------------------------------------------------------------------
| Article related routes
|--------------------------------------------------------------------------
| this set of routes may be removed in time
*/
Route::get('/articles', [ArticlesController::class, 'index']);    
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
Route::get('/articles/{article}/edit' , [ArticlesController::class, 'edit']);
Route::get('/articles/{article}/update', [ArticlesController::class, 'update']); 
Route::get('/articles/{article}/delete', [ArticlesController::class, 'delete']);

/*
|--------------------------------------------------------------------------
|  Normal Article related routes 
|--------------------------------------------------------------------------
|  come back to this set of routes, can it be merged with the 
|  /articles set of routes?
*/
Route::get('/create_normal_article', [ArticlesController::class, 'create_normal_article'])->name('create_normal_article');
Route::post('/create_normal_article', [ArticlesController::class, 'store_normal_article'])->name('store_normal_article');

/*
|--------------------------------------------------------------------------
| Baby Article related routes
|--------------------------------------------------------------------------
*/
Route::get('/baby_articles', [BabyArticlesController::class,'index'])->name('baby_articles');
Route::get('/baby_articles/{b_article}', [BabyArticlesController::class,'show']);
Route::get('/create_baby_article', [BabyArticlesController::class, 'create']);
Route::post('/store_baby_article', [BabyArticlesController::class, 'store'])->name('store_baby_articles');

/*
|--------------------------------------------------------------------------
| Kids Article related routes
|--------------------------------------------------------------------------
*/
Route::get('/kids_articles', [KidsArticlesController::class, 'index'])->name('kids_articles');
Route::get('/create_kid_article', [KidsArticlesController::class, 'create'])->name('create_kid_article');
Route::post('/store_kid_article', [KidsArticlesController::class, 'store'])->name('store_kid_article');
Route::get('/kids_articles/{k_article}', [KidsArticlesController::class,'show']);

/*
|--------------------------------------------------------------------------
| Guide Article related routes 
|--------------------------------------------------------------------------
| refactor the name within this set to 'create_guide' and 'GuideArticlesController'
*/
Route::get('/guides_articles', [ListArticlesController::class, 'index'])->name('guides_articles');
Route::get('/create_list_article', [ListArticlesController::class, 'create_list_article'])->name('create_list_article');
Route::post('/create_list_article', [ListArticlesController::class, 'store_list_article'])->name('store_list_article');
Route::get('/articles/list_article/{list_article}', [ListArticlesController::class, 'show_list_articles'])->name('show_guide');

/*
|--------------------------------------------------------------------------
| Contact related routes
|--------------------------------------------------------------------------
*/
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store_and_send'])->name('contact.store_and_send');

/*
|--------------------------------------------------------------------------
| Routes needing exploration
|--------------------------------------------------------------------------
|  this route(s) may not be needed
*/
Route::get('/select_articles');



