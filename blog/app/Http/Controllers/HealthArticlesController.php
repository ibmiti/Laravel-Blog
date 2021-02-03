<?php

namespace App\Http\Controllers;

use App\Models\HealthArticles;
use Illuminate\Http\Request;
use DB;

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
            'healthArticles' => HealthArticles::take(6)->latest()->paginate()
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
        // truncating || limiting the excerpt
        $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
        $healthArticle = new HealthArticles;
        $healthArticle->image = $request->image;
        $healthArticle->image_credit = $request->image_credit;
        $healthArticle->title = $request->title;
        $healthArticle->quip = $request->quip;
        $healthArticle->excerpt = $excerpt;
        $healthArticle->heading1 = $request->h1;
        $healthArticle->heading2 = $request->h2;
        $healthArticle->heading3 = $request->h3;
        $healthArticle->p1 = $request->p1;
        $healthArticle->p2 = $request->p2;
        $healthArticle->p3 = $request->p3;
    try {
        $healthArticle->save();
        return view('articles.actions.edit.editHealth.edit', ['healthArticle' => HealthArticles::find($healthArticle->id)]);
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
     */
    public function edit($healthArticleId)
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

/*
|---
|   TODO - Flesh this out later
|------
|   Suggestion : maybe include emailing ofRoot or send data into error catching and reporting service
|     // setup a system later in which will catch all logged errors
*/
        try { 
            $healthArticle->save();
            $editedhealthArticle = HealthArticles::find($healthArticle->id);
            return view('articles.actions.edit.editHealth.edit', ['healthArticle'=> $healthArticle]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($healthArticleId)
    {
        $message = [];
        try {
            DB::delete("delete from baby_articles where id = " . $healthArticleId);
           $message['success'] = 'Successfully deleted the article';
        } catch (Exception $e) {
            //  | TODO - log this
            $message['failure'] = 'failed to delete article. Contact ofRoot customer service!';
            $message['err'] = $e->getmessage();
        }
        return redirect()->route('health')->with([
            'messages'   => $message
           ]);
    }
}
