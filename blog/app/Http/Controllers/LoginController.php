<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('admin');
    }

    public function login(Request $request){
        $usernameGiven = $request->username;
        $passwordGiven = $request->password;

        $adminCreds = \App\Models\Login::all();
        $adminUser = $adminCreds[0]->username;
        $adminPass = $adminCreds[0]->password;
        
        if ( $usernameGiven == $adminUser && $passwordGiven == $adminPass){
            return view('articles.article_style.selection');
        } else {
            return view('admin');
        }
    }
}
