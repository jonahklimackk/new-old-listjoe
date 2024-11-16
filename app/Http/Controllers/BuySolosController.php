<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class BuySolosController extends Controller
{
    //

	/**
	* show buy solos page
	*
	* @return void
	*/
	public function show()
	{

		//testing stripe
		return view('members.stripe-test-buy-solos');

		// return View('members.buy-solos');
	}


/**
	* Show thank you page
	*
	* @return void
	*/
	public function thanks()
	{

		$user = Auth::user();


		return View('members.buy-solos-thanks',compact('user'));
	}

}
