<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
public function index(){
    return view('contact');
}
    public function store(Request $request){
        dd($request->all());
        Mail::send('contact',
            array(
                'nom' => $request->get('name'),
                'mail' => $request->get('mail'),
                'message' => $request->get('message')
            ), function($message)
            {
                $message->from('wj@wjgilmore.com');
                $message->to('wj@wjgilmore.com', 'Admin')->subject('TODOParrot Feedback');
            });

        return Redirect::route('getContact')->with('message', 'Thanks for contacting us!');

    }
}
