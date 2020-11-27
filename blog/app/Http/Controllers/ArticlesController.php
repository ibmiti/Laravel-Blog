<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article as Article;

class ArticlesController extends Controller
{
    public function index(){
        
        return view('articles', [
            'latest_articles' => $latest_articles = Article::take(6)->latest()->paginate()
        ]);
    }

    public function show($id){

        $article = Article::find($id);
        return view('articles.show', [
            'article' => $article
        ]);
    }

}
