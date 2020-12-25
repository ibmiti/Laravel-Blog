<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article as Article;
use App\Models\ListArticle;

class ArticlesController extends Controller
{
    public function index(){
        
        return view('articles.index', [
            'articles' => $articles = Article::take(6)->latest()->paginate(),
            'list_articles' => $list_articles = ListArticle::take(6)->latest()->paginate()
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


    public function store_normal_article(Request $request) 
    {
        
        // Todo Validate The Data
        // $this->validate($request, [
        //     'title' => 'required|string|max:50|min:3',
        //     'excerpt' => 'required|string|max:150|min:10',
        //     'body' => 'required|string|min:10',
        // ]);

        $article = new Article;
        
        $article->image = $request->image;
        $article->title = $request->title;
        $article->excerpt = $request->excerpt;
        $article->heading1 = $request->h1;
        $article->p1 = $request->p1;
        $article->heading2 = $request->h2;
        $article->p2 = $request->p2;
        $article->heading3 = $request->h3;
        $article->p3 = $request->p3;
        
        $article->save();
        

        
    }

    // public function store_list_article(Request $request)
    // {
    //     // Todo Validate The Data
    //     // $this->validate($request, [
    //     //     'title' => 'required|string|max:50|min:3',
    //     //     'excerpt' => 'required|string|max:150|min:10',
    //     //     'paragraph' => 'required|string|min:10',
    //     // ]);
        
    //     $article = new Article;
    //     // dd($article);

    //     $article->title = $request->title;
    //     $article->save();

        

    //     $article->title      = $request->title;

    //     $article->heading1   = $request->heading1;
    //     $article->image1     = $request->image1;
    //     $article->paragraph1 = $request->paragraph1;

    //     $article->heading2   = $request->heading2;
    //     $article->image2     = $request->image2;
    //     $article->paragraph2 = $request->paragraph2;

    //     $article->heading3   = $request->heading3;
    //     $article->image3     = $request->image3;
    //     $article->paragraph3 = $request->paragraph3;

    //     $article->heading4   = $request->heading4;
    //     $article->image4     = $request->image4;
    //     $article->paragraph4 = $request->paragraph4;

    //     $article->heading5   = $request->heading5;
    //     $article->image5     = $request->image5;
    //     $article->paragraph5 = $request->paragraph5;

    //     $article->heading6   = $request->heading6;
    //     $article->image6     = $request->image6;
    //     $article->paragraph6 = $request->paragraph6;

    //     $article->heading7   = $request->heading7;
    //     $article->image7     = $request->image7;
    //     $article->paragraph7 = $request->paragraph7;

    //     $article->heading8= $request->heading8;
    //     $article->image8= $request->image8;
    //     $article->paragraph8= $request->paragraph8;

    //     $article->heading9= $request->heading9;
    //     $article->image9= $request->image9;
    //     $article->paragraph9= $request->paragraph9;

    //     $article->heading10 = $request->heading10;
    //     $article->image10 = $request->image10;
    //     $article->paragraph10 = $request->paragraph10;

    //     // save data to database
    //     try {
    //     $article->save();
    //     } catch (Error $error){
    //         dd($error->getMessage());
    //     }

    // }


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
