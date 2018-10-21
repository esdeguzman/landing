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

    	mail(
    		env('MAIL_TO'), 
    		env('MAIL_SUBJECT') . $request->name, 
    		$message . "\n\nPlease send your reply to {$request->email_address}", 
    		"From: <{$request->email}>"
    	);


    	$request->session()->flash('email_sent', 'Your email has been successfully sent!');

    	return back();
    }
}
