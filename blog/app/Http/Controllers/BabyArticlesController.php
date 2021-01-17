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
        return view('articles.index.indexBaby', [
            'babyArticles' => $babyArticles = BabyArticles::take(6)->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create.createBaby');
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
            $babyArticle->save();
        } catch (\Exception $e) {
            // maybe include emailing ofRoot or send data into error catching and reporting service
            return $e->getMessage();
        }
        return view('articles.create.selection');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BabyArticles  $babyArticles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $babyArticle = BabyArticles::find($id);
        return view('articles.show.showBabyArticle', [
            'babyArticle' => $babyArticle 
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
