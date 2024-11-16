<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SupportController extends Controller
{
	/**
	* create a new Controller Instance
	*
	* @return void
	*/
	public function __construct()
	{
		// $this->middleware('auth');
	}


	/**
	* show the submit knowledge base page
	*
	* @return void
	*/
	public function knowledgeBase()
	{

		$user = Auth::user();


		return View('members.knowledge-base',compact('user'));
	}


	/**
	* show the submit tickets page
	*
	* @return void
	*/
	public function showSubmitTicket()
	{

		$user = Auth::user();


		return View('members.submit-ticket',compact('user'));
	}


	/**
	* process the submission
	*
	* @return void
	*/
	public function submitTicket(Request $request)
	{
		dd($request);
		$user = Auth::user();

		$validatedData = $request->validate([
			'name' => 'required|string',
			'message' => 'required'
		]);


		$supportTicket = SupportTicket::updateOrCreate(
			['user_id' => $user->id],
			['name' => $user->name],
			['email' => $user->email],
			['subject' => $request->subject],
			['message' => $request->message]
		);

		return Redirect('/members/submit-ticket/', compact('user'))->with('supportmessage', 'Thank you! We will get back to you within 24 hours.');


		// return View('members.submit-ticket',compact('user')->with('hi','sdfdfz'));
	}
}
