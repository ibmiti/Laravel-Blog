<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListArticle as ListArticle;

class ListArticlesController extends Controller
{

    // public function index(){
    //     return view('articles.index', [
    //         'list_articles' => dd($list_articles = \ListArticle::take(6)->latest()->paginate())
    //     ]);
    // }

    public function create_list_article(){
        return view('articles.article_type.list_article');

        /*

            potentially have another 

        */
    }

    public function store_list_article(Request $request)
    {

        // TODO - Validate The Data
        // --------------------------
        // $this->validate($request, [
        //     'title' => 'required|string|max:50|min:3',
        //     'excerpt' => 'required|string|max:150|min:10',
        //     'paragraph' => 'required|string|min:10',
        // ]);
        
        $article = new ListArticle;

        $article->title          = $request->title;
        $article->excerpt        = $request->excerpt;
        $article->heading1       = $request->heading1;
        $article->image_name     = $request->image1;
        $article->paragraph1     = $request->paragraph1; 
        $article->heading2       = $request->heading2;
        $article->image2_name    = $request->image2;
        $article->paragraph2     = $request->paragraph2;  
        $article->heading3       = $request->heading3;
        $article->image3_name    = $request->image3;
        $article->paragraph3     = $request->paragraph3;  
        $article->heading4       = $request->heading4;
        $article->image4_name    = $request->image4;
        $article->paragraph4     = $request->paragraph4;     
        $article->heading5       = $request->heading5;
        $article->image5_name    = $request->image5;
        $article->paragraph5     = $request->paragraph5;  
        $article->heading6       = $request->heading6;
        $article->image6_name    = $request->image6;
        $article->paragraph6     = $request->paragraph6; 
        $article->heading7       = $request->heading7;
        $article->image7_name    = $request->image7;
        $article->paragraph7     = $request->paragraph7; 
        $article->heading8       = $request->heading8;
        $article->image8_name    = $request->image8;
        $article->paragraph8     = $request->paragraph8;   
        $article->heading9       = $request->heading9;
        $article->image9_name    = $request->image9;
        $article->paragraph9     = $request->paragraph9;
        $article->heading10      = $request->heading10;
        $article->image10_name   = $request->image10;
        $article->paragraph10    = $request->paragraph10;
    
        // save data to database
        try {
            $article->save();
            return view('articles.article_type.list_article');
        } catch (Error $error){
            // setup a system later in which will catch all logged errors
            $error->getMessage();
        }

    }

    public function show_list_articles($id){
        $list_article = ListArticle::find($id);
        return view('articles.show_list_article', [
            'list_article' => $list_article
        ]);
    }

}
