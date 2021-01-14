<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListArticle as ListArticle;

class ListArticlesController extends Controller
{

/*
|------------------------------------------
| index public method
|------------------------------------------
| returns all_guides view
*/
    public function index(){
        return view('articles.all_guides', [
            'guide_article' => $guide_article = ListArticle::take(6)->latest()->paginate()
        ]);
    }

    public function create_list_article(){
        return view('articles.article_type.list_article');
    }

/*
|------------------------------------------
| store_list_article public method
|------------------------------------------
| will validate request from form  
| then
| returns stores data from form
*/
    public function store_list_article(Request $request)
    {

        // TODO - Validate The Data
        // --------------------------
        // $this->validate($request, [
        //     'title' => 'required|string|max:50|min:3',
        //     'excerpt' => 'required|string|max:150|min:10',
        //     'paragraph' => 'required|string|min:10',
        // ]);
        
        $guide_article = new ListArticle;

        $guide_article->title          = $request->title;
        $guide_article->excerpt        = $request->excerpt;
        $guide_article->heading1       = $request->heading1;
        $guide_article->image_name     = $request->image1;
        $guide_article->paragraph1     = $request->paragraph1; 
        $guide_article->heading2       = $request->heading2;
        $guide_article->image2_name    = $request->image2;
        $guide_article->paragraph2     = $request->paragraph2;  
        $guide_article->heading3       = $request->heading3;
        $guide_article->image3_name    = $request->image3;
        $guide_article->paragraph3     = $request->paragraph3;  
        $guide_article->heading4       = $request->heading4;
        $guide_article->image4_name    = $request->image4;
        $guide_article->paragraph4     = $request->paragraph4;     
        $guide_article->heading5       = $request->heading5;
        $guide_article->image5_name    = $request->image5;
        $guide_article->paragraph5     = $request->paragraph5;  
        $guide_article->heading6       = $request->heading6;
        $guide_article->image6_name    = $request->image6;
        $guide_article->paragraph6     = $request->paragraph6; 
        $guide_article->heading7       = $request->heading7;
        $guide_article->image7_name    = $request->image7;
        $guide_article->paragraph7     = $request->paragraph7; 
        $guide_article->heading8       = $request->heading8;
        $guide_article->image8_name    = $request->image8;
        $guide_article->paragraph8     = $request->paragraph8;   
        $guide_article->heading9       = $request->heading9;
        $guide_article->image9_name    = $request->image9;
        $guide_article->paragraph9     = $request->paragraph9;
        $guide_article->heading10      = $request->heading10;
        $guide_article->image10_name   = $request->image10;
        $guide_article->paragraph10    = $request->paragraph10;
    
        // save data to database
        try {
            $guide_article->save();
            return view('articles.article_type.list_article');
        } catch (Error $error){
            // setup a system later in which will catch all logged errors
            $error->getMessage();
        }

    }

/*
|------------------------------------------
| show_list_articles public method
|------------------------------------------
| queries ListArticle Model
| then
| returns result with/to show_list_article view
| also : makes new variable available to the view
*/
    public function show_list_articles($id){
        $guide_article = ListArticle::find($id);
        return view('articles.show_list_article', [
            'list_article' => $guide_article
        ]);
    }

}
