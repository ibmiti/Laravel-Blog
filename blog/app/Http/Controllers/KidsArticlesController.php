<?php

namespace App\Http\Controllers;

use App\Models\KidsArticles;
use Illuminate\Http\Request;
use DB;

class KidsArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.actions.index.indexKids', [
            'kidsArticles' => $kidsArticles = KidsArticles::take(6)->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.actions.create.createKid');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kidsArticle = new KidsArticles;
        $kidsArticle->image        = $request->image;
        $kidsArticle->image_credit = $request->image_credit;
        $kidsArticle->title        = $request->title;
        $kidsArticle->quip         = $request->quip;
        // truncating the excerpt.
        $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
        $kidsArticle->excerpt      = $request->excerpt;
        $kidsArticle->heading1     = $request->h1;
        $kidsArticle->heading2     = $request->h2;
        $kidsArticle->heading3     = $request->h3;
        $kidsArticle->p1           = $request->p1;
        $kidsArticle->p2           = $request->p2;
        $kidsArticle->p3           = $request->p3;

        try {
            $kidsArticle->save();    
            /*
            | after article is saved give the option to immediately view and edit or destroy
            */
            return view('articles.actions.edit.editKids.edit', ['kidsArticle' => KidsArticles::find($kidsArticle->id)]);
         } catch (\Exception $e){
            return $e->getMessage();
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KidsArticles  $kidsArticles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kidsArticle = KidsArticles::find($id);
        return view('articles.actions.show.showKidsArticle', [
            'kidsArticle' => $kidsArticle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KidsArticles  $kidsArticles
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $kidsArticleId)
    {
        return view('articles.actions.edit.editKids.edit', ['kidsArticle' => KidsArticles::find($kidsArticleId)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KidsArticles  $kidsArticles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KidsArticles $kidsArticles)
    {
        $kidsArticle = new kidsArticles;
        $kidsArticle->image = $request->image;
        $kidsArticle->image_credit = $request->image_credit;
        $kidsArticle->title = $request->title;
        $kidsArticle->quip = $request->quip;
        // truncating || limiting the excerpt
        $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
        $kidsArticle->excerpt = $excerpt;
        $kidsArticle->heading1 = $request->h1;
        $kidsArticle->heading2 = $request->h2;
        $kidsArticle->heading3 = $request->h3;
        $kidsArticle->p1 = $request->p1;
        $kidsArticle->p2 = $request->p2;
        $kidsArticle->p3 = $request->p3;

/*
|---
|   TODO - Flesh this out later
|------
|   Suggestion : maybe include emailing ofRoot or send data into error catching and reporting service
|     // setup a system later in which will catch all logged errors
*/
        try { 
            $kidsArticle->save();
            // $editedkidsArticle = kidsArticles::find($kidsArticle->id);
            return view('articles.actions.edit.editKids.edit', ['kidsArticle'=> $kidsArticle]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($kidsArticlesId)
    {
        $message = [];
        try {
            DB::delete("delete from kids_articles where id = " . $kidsArticlesId);
           $message['success'] = 'Successfully deleted the article';
        } catch (Exception $e) {
            //  | TODO - log this
            $message['failure'] = 'failed to delete article. Contact ofRoot customer service!';
            $message['err'] = $e->getmessage();
        }
        return redirect()->route('kids')->with([
         'messages'   => $message
        ]);
    }
}
