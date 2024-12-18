<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	//have to make this an auth eh




    /**
	* create a new Controller Instance
	*
	* @return void
	*/
	public function showSendMailing()
	{
		return view('admin.sendmail');
	}



}
