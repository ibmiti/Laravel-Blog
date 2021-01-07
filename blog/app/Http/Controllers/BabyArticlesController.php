<?php

namespace App\Http\Controllers;

use App\Models\BabyArticles;
use Illuminate\Http\Request;

class BabyArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('articles.baby_index', [
            'baby_articles' => $baby_articles = BabyArticles::take(6)->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.article_type.baby_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try { 
            $baby_article = new BabyArticles;
            $baby_article->image = $request->image;
            $baby_article->image_credit = $request->image_credit;
            $baby_article->title = $request->title;
            $baby_article->quip = $request->quip;
            // truncating || limiting the excerpt
            $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
            $baby_article->excerpt = $excerpt;
            $baby_article->heading1 = $request->h1;
            $baby_article->p1 = $request->p1;
            $baby_article->heading2 = $request->h2;
            $baby_article->p2 = $request->p2;
            $baby_article->heading3 = $request->h3;
            $baby_article->p3 = $request->p3;
            $baby_article->save();
        } catch (\Exception $e) {
            // maybe include emailing ofRoot or send data into error catching and reporting service
            return $e->getMessage();
        }
        return view('articles.article_type.selection');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BabyArticles  $babyArticles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $baby_article = BabyArticles::find($id);

        return view('articles.baby_articles_show', [
            'baby_articles' => $baby_article 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BabyArticles  $babyArticles
     * @return \Illuminate\Http\Response
     */
    public function edit(BabyArticles $babyArticles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BabyArticles  $babyArticles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BabyArticles $babyArticles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BabyArticles  $babyArticles
     * @return \Illuminate\Http\Response
     */
    public function destroy(BabyArticles $babyArticles)
    {
        //
    }
}
