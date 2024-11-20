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

		$key = "6f431a093bc22dc8bd1e687b9e428e57".rand(10000000,99999999);


		$credits = rand(10,50);

		$creditClicksUrl = CreditClicks::create([
			'recipient_id' => $recipient->id,
			'sender_id' => $sender->id,
			'key' => $key,
			'credits' => $credits,
			'clicks' => 0,
			'earned_credits' => false
		]);

		return '/earn/'.$creditClicksUrl->key;

	}


}