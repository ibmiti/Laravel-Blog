<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article as Article;

class ArticlesController extends Controller
{
    public function index(){
        
        return view('articles.index', [
            'articles' => $articles = Article::take(6)->latest()->paginate()
        ]);
    }

    public function show($id){

        $article = Article::find($id);
        return view('articles.show', [
            'article' => $article
        ]);
    }
    
    public function create_normal_article()
    {
        return view('articles.article_style.normal_article');
    }

    // second type of article 
    public function create_list_article(){
        return view('articles.article_style.list_article');
    }

    public function store_normal_article(Request $request) 
    {

        // Todo Validate The Data
        // $this->validate($request, [
        //     'title' => 'required|string|max:50|min:3',
        //     'excerpt' => 'required|string|max:150|min:10',
        //     'body' => 'required|string|min:10',
        // ]);

        
        $title = $request->title;
        $excerpt = $request->excerpt;
        $body = $request->body;
        

        dd($title, 'made it');
    }

    public function store_list_article(Request $request)
    {
        // Todo Validate The Data
        // $this->validate($request, [
        //     'title' => 'required|string|max:50|min:3',
        //     'excerpt' => 'required|string|max:150|min:10',
        //     'paragraph' => 'required|string|min:10',
        // ]);

        dd('list article', $request->title);


    }


    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }

    public function about() {
        
        return view('about', [
                    'articles' => $articles = Article::take(3)->latest('created_at')->get()
                ]);
    }
}
