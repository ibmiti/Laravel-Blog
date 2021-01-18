<?php

namespace App\Http\Controllers;

use App\Models\KidsArticles;
use Illuminate\Http\Request;

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
            $kid_article = new KidsArticles;
            $kid_article->image = $request->image;
            $kid_article->image_credit = $request->image_credit;
            $kid_article->title = $request->title;
            $kid_article->quip = $request->quip;
            // truncating || limiting the excerpt
            $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
            $kid_article->excerpt = $excerpt;
            $kid_article->heading1 = $request->h1;
            $kid_article->p1 = $request->p1;
            $kid_article->heading2 = $request->h2;
            $kid_article->p2 = $request->p2;
            $kid_article->heading3 = $request->h3;
            $kid_article->p3 = $request->p3;
        try {
            $kid_article->save();    
            return view('articles.actions.create.selection');    
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
        $kidArticle = KidsArticles::find($id);
        return view('articles.actions.show.showKidsArticle', [
            'kidArticle' => $kidArticle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KidsArticles  $kidsArticles
     * @return \Illuminate\Http\Response
     */
    public function edit(KidsArticles $kidsArticles)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KidsArticles  $kidsArticles
     * @return \Illuminate\Http\Response
     */
    public function destroy(KidsArticles $kidsArticles)
    {
        //
    }
}
