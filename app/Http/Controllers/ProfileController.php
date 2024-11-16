<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Message;
use App\Helpers\Error;
use App\Models\SocialProfile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
	/**
	* create a new Controller Instance
	*
	* @return void
	*/
	public function __construct()
	{
		// $this->middleware('auth');
		// $this->middleware('member.ads');
	}




	/**
	* Show member's own profile page in account
	*
	* @return void
	*/
	public function showProfile()
	{
		$messages = Message::where('to_user_id',Auth::user()->id)->get()->all();
		$messages = Message::sortWithReplies($messages);

		$referrals = User::where('sponsor_id', Auth::user()->id)->get()->all();

		return View('members.profile',compact('referrals','messages'));
	}





	/**
	* show profile page to outside visitors
	*
	* @return void
	*/
	public function showProfileOutside($username)
	{
		$profileUser = User::where('username', $username)->get()->first();

		if (!$profileUser)
			return redirect('/');

		$messages = Message::where('to_user_id',$profileUser->id)->where('type','PUBLIC')->get()->all();
		$messages = Message::sortWithReplies($messages);
		$referrals = User::where('sponsor_id', $profileUser->id)->get()->all();

		return View('members.profile-outside',compact('referrals', 'profileUser','messages'));
	}


	/**
	* show edit profile page
	*
	* @return void
	*/
	public function showEditProfile()
	{
		$socialProfiles = SocialProfile::where('user_id', Auth::user()->id)->get()->first();
		// dd($socialProfiles);

		return View('members.editprofile',compact('socialProfiles'));
	}


	/**
	* update the profile
	*
	* @return void
	*/
	public function update(Request $request)
	{
		dd($request);
		$validatedData = $request->validate([
			'facebook' => 'max:200',
			'twitter' => 'max:200',
			'skype' => 'max:200',
		]);

		SocialProfile::where('user_id', Auth::user()->id)->delete();

		$socialProfile = SocialProfile::create([
			'user_id' => Auth::user()->id,
			'facebook' => $request->facebook,
			'twitter' => $request->twitter,
			'skype'=> $request->skype,
			'gravatar' => $request->gravatar,
		]);

		return Redirect('members/editprofile')->with('message','You have successfully updated your social profiles.');

	}

}
