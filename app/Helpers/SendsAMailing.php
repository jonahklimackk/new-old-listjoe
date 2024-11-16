<?php

namespace app\Helpers;

use Mail;
use Auth;
use App\User;
use App\Mailing;
use App\Mail\TestMail;
use App\Jobs\SendsMail;

class SendsAMailing
{

	/**
	* Moose Test
	*
	* @return int
	*/
	public static function testViaWeb()
	{

		//find first paid user in DB with mailing queued
		$queuedMailings = Mailing::where('status', 'queued')->orderBy('created_at', 'asc')->get()->all();

		foreach ($queuedMailings as $queuedMailing)
		{
			$sender = User::where('id', $queuedMailing->user_id)->get()->first();
			if ($sender->isUpgraded())
			{
				$nextMailing = $queuedMailing;
				$nextSender = $sender;
				break;
			}
		}
		//no paid users, get next in line user
		if (! isset($nextSender) && ! isset($nextMailing))
		{
			$nextMailing = $queuedMailings[0];
			$nextSender = User::where('id', $queuedMailings[0]->user_id)->get()->first();
		}

		//get # of random recipients = to credits spent
		$totalUsers = User::all()->count();
		$recipientCount = $totalUsers < $nextMailing->credits ? $totalUsers : $nextMailing->credits;

		$recipients = User::get()->random($recipientCount)->all();



		//send it off to the job queue for sending
		dispatch(new SendsMail($nextSender, $nextMailing, $recipients));

	}




	/**
	* Moose Test
	*
	* @return int
	*/
	public static function usingAJob(User $user)
	{


		dispatch(new SendsAMailing($user));

	}




}