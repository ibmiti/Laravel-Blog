<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article as Article;
use App\Models\ListArticle; // | may delete this 
use App\Models\GuideArticles;
use App\Models\HealthArticles;
use App\Models\KidsArticles;
use App\Models\BabyArticles;

/*
|------------------
| Master Article Controller 
|------------------
| This Controller file will act as a way to manipulate multiple 
| types of articles.
*/
class ArticlesController extends Controller
{

/*      
| ---------------
| We're wanting to return a limited amount of articles from each category so far, this list 
| may change over time.
| ---------------
*/
    public function index(){
        return view('articles.index.index', [
            'articles'      => $articles       = Article::take(2)->latest()->paginate(),
            'babyArticles'  => $babyArticles   = BabyArticles::take(2),
            'kidsArticles'  => $kidsArticles   = KidsArticles::take(2)->latest()->paginate(),
            'guideArticles' => $guideArticles  = GuideArticles::take(2)->latest()->paginate(),
            'healthArticles'=> $healthArticles = HealthArticles::take(2)->latest()->paginate()
        ]);
    }

/*
| ---------------
| with this we want to send one individual article.
| ---------------
| i'm not too sure this will stay... 
*/
    public function show($id){
        $article = Article::find($id);
        return view('articles.show.showArticle', [
            'article' => $article 
        ]);
    }
    
/*
| ---------------
| these may not stay.
| --------------- 
*/
    public function create(){
        return view('articles.create.createNormal');
    }

    // | May delete this method
    public function store(Request $request){
        
        //| TODO - Validate The Data
        // $this->validate($request, [
        //     'title' => 'required|string|max:50|min:3',
        //     'excerpt' => 'required|string|max:150|min:10',
        //     'body' => 'required|string|min:10',
        // ]);

        $article = new Article;
        
        $article->image = $request->image;
        $article->image_credit = $request->image_credit;
        $article->title = $request->title;
        $article->quip = $request->quip;
        
        // truncating || limiting the excerpt
        $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
        $article->excerpt = $excerpt;
        $article->heading1 = $request->h1;
        $article->p1 = $request->p1;
        $article->heading2 = $request->h2;
        $article->p2 = $request->p2;
        $article->heading3 = $request->h3;
        $article->p3 = $request->p3;
    
        // saving the article
        $article->save();        
    }

/*
|-------------------------------------------------
|   This may become a future feature - where 
|   6 of all the various articles are shown on a
|   on a single page 
|-------------------------------------------------
*/
    // public function show(){
    //     return view('articles.show_all_articles', [
    //         'articles' => $articles = Article::take(6)->latest()
    //     ]);
    // }

    public function edit(Request $request)
    {
        /* 
        |------
        |  based off type of article and count, query the database
        |------
        */
        $type  = $request->type;
        $count = $request->count; 
        if ($type == 'baby'){
            return view('articles.actions.edit.editBaby.editBabyArticle' ,
             ['babyArticles' => $babyArticles = BabyArticles::take($count)->latest()->get()]
            );
        }
        if ($type == 'kid' ){
            return view('articles.actions.edit.editKids.editKidsArticle',
                ['kidsArticles' => $kidsArticles = KidsArticles::take($count)->latest()->get()]
            );
        }
        if ($type == 'guide'){
            return view('articles.actions.edit.editGuide.editGuideArticle',
                ['guideArticles' => $guideArticles = GuideArticles::take($count)->latest()->get()]
            );
        }
        if ($type == 'health'){
            return view('articles.actions.edit.editHealth.editHealthArticle',
                ['healthArticles' => $healthArticles = healthArticles::take($count)->latest()->get()]
            ); 
        }
    }

    // public function update()
    // {

    // }

    // public function delete()
    // {
        
    // }

/* 
| ----------------------------
|  Non Article Crud Operations
| ----------------------------
*/
    public function about() {
        return view('about', [
                    'articles' => $articles = Article::take(3)->latest('created_at')->get()
                ]);
    }

    public function viewSelectArticlePage(){
        return view('articles.actions.select.selectArticleCreate');
    }

    public function viewEditArticlePage(){
        // dd('hello ');
        return view('articles.actions.select.selectArticleEdit');
    }
}
// blog/resources/views/articles/actions/select/selectArticleEdit
