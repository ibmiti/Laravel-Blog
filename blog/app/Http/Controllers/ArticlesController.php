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

        // display max of 10 articles per page using pagination 

        // return paginated resource to view articles
        
        // - get most recent article out of all articles 
        $mostRecent = [];
        // - push articles to articles array
        $mostRecent[] = BabyArticles::latest()->paginate(10);
        $mostRecent[] = KidsArticles::latest()->pageinate(10);
        $mostRecent[] = GuideArticles::latest()->paginate(10);
        $mostRecent[] = HealthArticles::latest()->paginate(10);

        // - get most popular article out of all-time popular articles
        // - this feature may be fully implemented when more users are active
        // - get with founder to plan out how to implement features
        $mostPopular = [];
        // - push articles to articles array
        $mostPopular[] = BabyArticles::latest()->paginate(10);
        $mostPopular[] = KidsArticles::latest()->paginate(10);
        $mostPopular[] = GuideArticles::latest()->pagiante(10);
        $mostPopular[] = HealthArticles::latest()->paginate(10);
     
        return view('articles.actions.index.index', [
            'articles'      => Article::latest()->paginate(10),
            'babyArticles'  => $babyArticles = BabyArticles::paginate(10),
            'kidsArticles'  => $kidsArticles = KidsArticles::paginate(10),
            'guideArticles' => $guideArticles = GuideArticles::paginate(10),
            'healthArticles'=> $healthArticles = HealthArticles::paginate(10),
            'mostRecent'    => $mostRecent,
            'mostPopular'   => $mostPopular,
        ]);
    }

// - get most popular article out of all-time popular articles
// - this feature may be fully implemented when more users are active
// - get with founder to plan out how to implement features
    public function mostPopular(){
        //
    }

// - get most recent articles out of all articles
// - this feature may be fully implemented when more users are active
// - get with founder to plan out how to implement features
    public function mostRecent(){
        //
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
    
    // - general edit :method allowing various edits of multiple resources; e.g, (:type baby == baby article, which chooses to :edit baby )
    public function edit(Request $request)
    {
        /* 
        |------
        |  use type and count to choose which type of article to take count from
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

    // - return about :view with various sets of article :types; e.g, ( baby :articles, kid :articles, etc. )
    public function about() {
        $articles = [];
        $babyArticles = BabyArticles::take(2)->latest()->get();
        $kidArticles  = KidsArticles::take(2)->latest()->get();
        $guideArticles = GuideArticles::take(2)->latest()->get();
        $healthArticles = HealthArticles::take(2)->latest()->get();
        
        // - push articles to articles array
        $articles[] = $babyArticles;
        $articles[] = $kidArticles;
        $articles[] = $guideArticles;
        $articles[] = $healthArticles;

    return view('about', ['articles' => $articles]);
    }

    // - returns selectArticleCreate :view 
    public function viewSelectArticlePage(){
        return view('articles.actions.select.selectArticleCreate');
    }

    //  - returns selectArticleEdit :view 
    public function viewEditArticlePage(){
        return view('articles.actions.select.selectArticleEdit');
    }
}