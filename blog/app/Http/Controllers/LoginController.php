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

        $superAdminUser = $adminCreds[0]->username;
        $superAdminPass = $adminCreds[0]->password;
        $adminUser1     = $adminCreds[1]->username;
        $adminPass      = $adminCreds[1]->password;
        
        if ( $usernameGiven == $superAdminUser && $passwordGiven == $superAdminPass){
            return view('articles.actions.select.createOrEdit');
            // return view('articles.create.selection');
        } elseif ($usernameGiven == $adminUser1 && $passwordGiven == $adminPass) {
            return view('articles.actions.select.createOrEdit');
            // return view('articles.create.selection');
        } else {
            return view('admin');
        }
    }
}
