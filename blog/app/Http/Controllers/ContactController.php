<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail; 

class ContactController extends Controller
{

    public function show(Request $request) {
        return view('contact');
      }


    public function store_and_send(Request $request) {
        
        // Form validation
        // potentially place a try catch here
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ]);
        
        //  Store data in database
        Contact::create($request->all());

            
         //  Send mail to admin
         \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            // 'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('dimitri.mcdaniel@gmail.com', 'Admin')->subject($request->get('subject'));
        });
        
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}
