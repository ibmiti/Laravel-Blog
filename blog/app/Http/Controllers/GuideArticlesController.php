<?php

namespace App\Http\Controllers;

use App\Models\GuideArticles;
use Illuminate\Http\Request;

class GuideArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index.indexGuide', [
            'guideArticles' => $guideArticles = GuideArticles::take(6)->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create.createGuide');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuideArticles  $guideArticles
     * @return \Illuminate\Http\Response
     */
    public function show(GuideArticles $guideArticles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuideArticles  $guideArticles
     * @return \Illuminate\Http\Response
     */
    public function edit(GuideArticles $guideArticles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuideArticles  $guideArticles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuideArticles $guideArticles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuideArticles  $guideArticles
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuideArticles $guideArticles)
    {
        //
    }
}
