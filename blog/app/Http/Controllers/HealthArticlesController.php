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
            'healthArticles' => HealthArticles::latest()->paginate(10)
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
        // | add server side validation
        $this->validate($request, [
            'title' => 'required|string|max:50|min:3',
            'excerpt' => 'required|string|max:150|min:10',
        ]);

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
        return view('articles.actions.edit.editHealth.edit', [
            'healthArticle' => HealthArticles::find($healthArticle->id),
            $request->session()->flash('success', 'Successfully created Health Article', 1)
            ]);
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
        $healthArticle->heading2 = $request->h2;
        $healthArticle->heading3 = $request->h3;
        $healthArticle->p1 = $request->p1;
        $healthArticle->p2 = $request->p2;
        $healthArticle->p3 = $request->p3;

/*
|---
|   TODO - Flesh this out later
|------
|   Suggestion : send error to ofRoot:email or send data into error 
|   catching &  reporting service
|   // setup a system later in which will catch all logged errors
*/
        try { 
            //  - try to save 
            $healthArticle->save();
            //  - try to find 
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
          // - try running query to database
          try {
            DB::delete("delete from health where id = " . $healthArticleId);
            return redirect()->route('health')->with('message', 'Health article deleted.');
        } catch (Exception $e) {
            //  - in case of error do...
            $log_error = $e->getmessage();
            //  - return with custom error 
           return redirect()->route('health')->with('message', 'Failed to delete article - contact ofRoot customer service, or try again.');
        }
    }
}
