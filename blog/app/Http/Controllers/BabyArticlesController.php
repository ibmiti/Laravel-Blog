<?php

namespace App\Http\Controllers;

use App\Models\BabyArticles;
use Illuminate\Http\Request;
use DB;

class BabyArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.actions.index.indexBaby', [
            'babyArticles' => BabyArticles::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.actions.create.createBaby');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // | add server side validation
        $this->validate($request, [
            'title' => 'required|string|max:50|min:3',
            'excerpt' => 'required|string|max:150|min:10',
        ]);

        // | add event listener 
        // | - this event listener will notify by email those signed up that a new article has been created
        
            $babyArticle = new BabyArticles;
            $babyArticle->image = $request->image;
            $babyArticle->image_credit = $request->image_credit;
            $babyArticle->title = $request->title;
            $babyArticle->quip = $request->quip;
            // truncating || limiting the excerpt
            $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
            $babyArticle->excerpt = $excerpt;
            $babyArticle->heading1 = $request->h1;
            $babyArticle->heading2 = $request->h2;
            $babyArticle->heading3 = $request->h3;
            $babyArticle->p1 = $request->p1;
            $babyArticle->p2 = $request->p2;
            $babyArticle->p3 = $request->p3;

        try { 

            $babyArticle->save();

            return view('articles.actions.edit.editBaby.edit', [
                'babyArticle' => BabyArticles::find($babyArticle->id),   
                $request->session()->flash('success', 'Successfully created Baby Article', 1)
            ]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
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
        return view('articles.actions.show.showBabyArticle', [
            'babyArticle' => $babyArticle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BabyArticles  $babyArticles
     * @return \Illuminate\Http\Response
     */
    // public function edit(BabyArticles $babyArticles)
    // {
    //     dd('step 1');
    //     return view('editBabyArticle', ['babyArticles' => $babyArticles]);
    // }

    // | This method will return the specified article with the new view
    public function edit($babyArticleId)
    {   
        // | use the id to return the individual article
        return view('articles.actions.edit.editBaby.edit', ['babyArticle'=> BabyArticles::find($babyArticleId)]);
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
        // on update crete new instance of model 
        $babyArticle               = new BabyArticles;
        $babyArticle->image        = $request->image;
        $babyArticle->image_credit = $request->image_credit;
        $babyArticle->title        = $request->title;
        $babyArticle->quip         = $request->quip;
        // truncating || limiting the excerpt
        $excerpt                   = \Illuminate\Support\Str::limit($request->excerpt, 40);
        $babyArticle->excerpt      = $excerpt;
        $babyArticle->heading1     = $request->h1;
        $babyArticle->heading2     = $request->h2;
        $babyArticle->heading3     = $request->h3;
        $babyArticle->p1           = $request->p1;
        $babyArticle->p2           = $request->p2;
        $babyArticle->p3           = $request->p3;
/*
|---
|   TODO - Flesh this out later
|------
|   Suggestion : maybe include emailing ofRoot or send data into error catching and reporting service
|     // setup a system later in which will catch all logged errors
*/
        try { 
            $babyArticle->save();
            // $editedBabyArticle = BabyArticles::find($babyArticle->id);
            return view('articles.actions.edit.editBaby.edit', ['babyArticle'=> $babyArticle]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BabyArticles  $babyArticles
     * @return \Illuminate\Http\Response
     */
    public function destroy($babyArticleId, request $request)
    {
        // - try running query to database
        try {
            DB::delete("delete from baby_articles where id = " . $babyArticleId);
            //  - on success 
            return redirect()->route('babies')->with('message', 'Baby article deleted.');
        } catch (Exception $e){
            // - in case on error/exception do these things
            $log_error = $e->getmessage();
            return redirect()->route('babies')->with('message', 'Failed to delete article - contact ofRoot customer service, or try again.');
        }
    }
}
