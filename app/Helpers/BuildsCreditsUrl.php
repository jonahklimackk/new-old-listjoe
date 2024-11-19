<?php

namespace app\Helpers;

use App\Models\User;
use App\Models\CreditClicks;

class BuildsCreditsUrl
{

	/**
	* /build the cr3edit url including necessary 
	* tab le entrise to make it all work
	*
	* @return int
	*/
	public static function build (User $sender, User $recipient)
	{
		
	 //so creating an url involvew isnesrting a reccord into
		//credit click qhar3ewver dataghbasfd
		// then return the url which is all ready to be dclicked once only

		$key = "randomstringwithstrlencharactersrandomstringwithstrlencharacters".rand(1,1000000);

		$credits = rand(10,40);

		$creditClicksUrl = CreditClicks::create([
			'recipient_id' => $recipient->id,
			'sender_id' => $sender->id,
			'key' => $key,
			'credits' => $credits,
			'clicks' => 0,
			'earned_credits' => false
		]);

		return '/earn/'.$creditClicksUrl->key."/".$sender->username;

	}


	// $$creditClick = CreditClicks::updateOrCreate([
	// 	'key' => '', 
	// ],
	// [
	// 	'price' => 99, 
	// 	'discounted' => 1
	// ]);

}