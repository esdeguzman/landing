<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function store(Request $request) 
    {

    	$this->validate($request, [
    		'name' => 'required|min:2',
    		'email_address' => 'required|email',
    		'message' => 'required|min:13'
    	]);


    	// use wordwrap() if lines are longer than 70 characters
    	$message = wordwrap($request->message,70);

    	mail(env('MAIL_TO'), env('MAIL_SUBJECT') . $request->name, $message, "From: {$request->email}");

    	return back();
    }
}
