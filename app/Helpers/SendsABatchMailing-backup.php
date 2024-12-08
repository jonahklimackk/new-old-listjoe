<?php

namespace app\Helpers;

use Auth;
use Resend;
use App\Models\User;
use App\Models\Mailing;
use App\Mail\CreditMail;
use App\Models\TopEmailAd;
use App\Helpers\BuildsCreditsUrl;

class SendsABatchMailing
{

	/**
	* Do what the cron job would do
	*
	* @return int
	*/
	public static function cronjob()
	{

		$queuedMailings = Mailing::where('status', 'queued')->orderBy('created_at', 'asc')->get()->all();

		if (!$queuedMailings){
			dd('no queeud mailinfgs');
			exit;
		}


		//find first paid user in DB with mailing queued
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
		if (!isset($nextSender) && !isset($nextMailing))
		{
			$nextMailing = $queuedMailings[0];
			$nextSender = User::where('id', $queuedMailings[0]->user_id)->get()->first();
		}

		//send it off to the job queue for sending
		// dispatch(new SendsMail($nextSender, $nextMailing));
		SendsABatchMailing::buildArray($nextSender,$nextMailing);
	}	


	/**
	* Build the Batch Array
	*
	* @return int
	*/
	public static function buildArray($sender, $mailing)
	{

		// $sender=Auth::user();
		// $topEmailAd = TopEmailAd::find(1);
		// $recipient = User::get()->random(1)->first();
		// $creditsUrl= '';
		// $html =  view('emails.resend-credit-mail',compact('sender','topEmailAd','recipient','creditsUrl','mailing'))->render();
		// echo $html;
		// exit;

		//has to be 100 at a time
		
		// $numRecipients = $mailing->recipients;
		$numRecipients = User::count();

		$batches = number_format($numRecipients / 100,0);
		$remainder = $numRecipients % 100 ;
		dump('batches '.$batches);
		dump('remainder '.$remainder);
		dump('numRecipients '.$numRecipients);

		//has to be one call one time to get all of them
		$recipients = User::get()->random($numRecipients)->all();


		$newRecipients[] = '';
		//BATCHES		
		for($i=0;$i<$batches;$i++)
		{

			for($j=0;$j<=100;$j++)
			{
				$creditsUrl = BuildsCreditsUrl::build($sender,$recipients[$j],$mailing);

				$mailing->subject = str_replace("[FIRST_NAME]", $recipients[$j]->name , $mailing->subject);
				$mailing->body = str_replace("[FIRST_NAME]", $recipients[$j]->name , $mailing->body);

				$topEmailAd = TopEmailAd::get()->random(1)->first();

				$html =  view('emails.credit-mail.resend-credit-mail',compact('sender','topEmailAd','creditsUrl','mailing'))->with('recipient',$recipients[$i])->render();

				// I need to build, this:
				$batch[] = [
					'from' => 'noreply@listjoe.com',
					'to' => $recipients[$j]->email,
					'subject' => $mailing->subject,
					'html' => $html
				];


					// foreach ($batch as $littlebatch) {
					// 	echo $littlebatch['html'];
					// 	exit;
					// }



				$newRecipients[] = $recipients[$j];
			}		
		}


		//if number of recipeints = < 100
		// then we get here with no newreccipients defined
		dump('current count '.count($newRecipients));
		dump('current count batch '.count($batch));
		dump('count plus remaindeer '.count($newRecipients));




		//
		// REMAINDER - some
		//
		for($i=count($newRecipients)-1;$i <= $remainder+count($newRecipients);$i++)
		{
			//I really shouldn't have to do this 
			if ($i >= $numRecipients)
				break;


			$creditsUrl = BuildsCreditsUrl::build($sender,$recipients[$i],$mailing);

			$mailing->subject = str_replace("[FIRST_NAME]", $recipients[$i]->name , $mailing->subject);
			$mailing->body = str_replace("[FIRST_NAME]", $recipients[$i]->name , $mailing->body);


			$topEmailAd = TopEmailAd::get()->random(1)->first();


			$html =  view('emails.credit-mail.resend-credit-mail',compact('sender','topEmailAd','creditsUrl','mailing'))->with('recipient',$recipients[$i])->render();

				// I need to build, this:
			$batch[] = [
				'from' => 'noreply@listjoe.com',
				'to' => $recipients[$i]->email,
				'subject' => $mailing->subject,
				'html' => $html
			];
		}


		// foreach ($batch as $littlebatch) {
		// 		// echo $littlebatch->html;



		dump(count($batch).' batch has right njumber');

		$batches = array_chunk($batch,100);

		// $resend = Resend::client('re_7UKM5DtA_HRJWiFEDNfaG3JnEzUwgdudz');
		foreach ($batches as $batch ){
			dump($batch);
			// $resend->batch->send($batch);
		}

		exit;




		$resend = Resend::client('re_7UKM5DtA_HRJWiFEDNfaG3JnEzUwgdudz');
		$resend->batch->send($batch);

        //set mailing to sent
		$mailing->status = "sent";
		$mailing->save();

        	//send an email notifying the sender of a completed mailing
		Mail::to($sender)->send(new MailingCompleted($sender,count($recipients)));



	}	

}