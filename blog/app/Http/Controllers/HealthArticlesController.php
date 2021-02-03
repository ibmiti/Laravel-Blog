<?php

namespace App\Http\Controllers;

use App\Models\HealthArticles;
use Illuminate\Http\Request;

class HealthArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.actions.index.indexHealth', [
            'healthArticles' => $healthArticles = HealthArticles::take(6)->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.actions.create.createHealth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $healthArticle = new HealthArticles;
        $healthArticle->image = $request->image;
        $healthArticle->image_credit = $request->image_credit;
        $healthArticle->title = $request->title;
        $healthArticle->quip = $request->quip;
        // truncating || limiting the excerpt
        $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
        $healthArticle->excerpt = $excerpt;
        $healthArticle->heading1 = $request->h1;
        $healthArticle->p1 = $request->p1;
        $healthArticle->heading2 = $request->h2;
        $healthArticle->p2 = $request->p2;
        $healthArticle->heading3 = $request->h3;
        $healthArticle->p3 = $request->p3;
    try {
        $healthArticle->save();    
        return view('articles.actions.create.selection');    
     } catch (\Exception $e){
        return $e->getMessage();
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthArticles  $healthArticles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $healthArticle = HealthArticles::find($id);
        return view('articles.actions.show.showHealthArticle', [
            'healthArticle' => $healthArticle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HealthArticles  $healthArticles
     * @return \Illuminate\Http\Response
     */
    public function edit( $healthArticleId)
    {
        // | use the id to return the individual article
        return view('articles.actions.edit.editHealth.edit', ['healthArticle'=> HealthArticles::find($healthArticleId)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HealthArticles  $healthArticles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthArticles $healthArticles)
    {
        $babyArticle = new BabyArticles;
        $babyArticle->image = $request->image;
        $babyArticle->image_credit = $request->image_credit;
        $babyArticle->title = $request->title;
        $babyArticle->quip = $request->quip;
        // truncating || limiting the excerpt
        $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
        $babyArticle->excerpt = $excerpt;
        $babyArticle->heading1 = $request->h1;
        $babyArticle->p1 = $request->p1;
        $babyArticle->heading2 = $request->h2;
        $babyArticle->p2 = $request->p2;
        $babyArticle->heading3 = $request->h3;
        $babyArticle->p3 = $request->p3;

/*
|---
|   TODO - Flesh this out later
|------
|   Suggestion : maybe include emailing ofRoot or send data into error catching and reporting service
|     // setup a system later in which will catch all logged errors
*/
        try { 
            $babyArticle->save();
            $editedBabyArticle = BabyArticles::find($babyArticle->id);
            return view('articles.actions.edit.editBaby.edit', ['babyArticle'=> $babyArticle]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HealthArticles  $healthArticles
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthArticles $healthArticles)
    {
        $message = [];
        try {
            DB::delete("delete from baby_articles where id = " . $babyArticleId);
           $message['success'] = 'Successfully deleted the article';
        } catch (Exception $e) {
            //  | TODO - log this
            $message['failure'] = 'failed to delete article. Contact ofRoot customer service!';
            $message['err'] = $e->getmessage();
        }
        return view('articles.actions.edit.editBaby.edit', ['babyArticle'=> BabyArticles::find($babyArticleId),
         'messages'   => $message
        ]);
    }
}
