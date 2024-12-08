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
			dd('no queued mailings');
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
		SendsABatchMailing::buildAndSendBatches($nextSender,$nextMailing);
	}	


	/**
	* Build the Batch Array
	*
	* @return int
	*/
	public static function buildAndSendBatches($sender, $mailing)
	{

		
		// $numRecipients = User::count();
		$numRecipients=176;
		$numBatches = number_format($numRecipients / 100,0);
		$remainder = $numRecipients % 100 ;
		dump('numRecipients '.$numRecipients);
		dump('Number of batches '.$numBatches);
		dump('remainder '.$remainder);

		//has to be one call one time to get all of them
		$recipients = User::get()->random($numRecipients)->all();


		//
		// Batches, bitches
		//
		$bigBatch = [];
		for($i=1;$i<$numBatches;$i++)
		{
			for($j=0;$j<100;$j++)
			{
				$bigBatch[] = [
					'from' => 'noreply@listjoe.com',
					'to' => $recipients[$j]->email,
					'subject' => $mailing->subject,
					'html' => SendsABatchMailing::buildHtml($sender, $mailing,$recipients[$j])
				];

				foreach ($bigBatch as $littlebatch) {
					echo $littlebatch['html'];
					exit;
				}

			}		
		}

		dump($bigBatch);
		dump('count for batch is '.count($bigBatch));

		//
		// REMAINDER batch
		//
		for($i=count($bigBatch);$i < $numRecipients;$i++)
		{

			$bigBatch[] = [
				'from' => 'noreply@listjoe.com',
				'to' => $recipients[$i]->email,
				'subject' => $mailing->subject,
				'html' => SendsABatchMailing::buildHtml($sender, $mailing,$recipients[$i])
			];
		}


		dump(count($bigBatch).' big batch has the right number');

		$batches = array_chunk($bigBatch,100);

		// $resend = Resend::client('re_7UKM5DtA_HRJWiFEDNfaG3JnEzUwgdudz');
		foreach ($batches as $batch ){
			dump($batch);
			// $resend->batch->send($batch);
		}

		exit;

        //set mailing to sent
		$mailing->status = "sent";
		$mailing->save();

        	//send an email notifying the sender of a completed mailing
		Mail::to($sender)->send(new MailingCompleted($sender,count($recipients)));



	}	


	/**
	* Build the email html for resend
	*
	* @return int
	*/
	public static function buildHtml($sender, $mailing, $recipient)
	{


		$creditsUrl = BuildsCreditsUrl::build($sender,$recipient,$mailing);

		$mailing->subject = str_replace("[FIRST_NAME]", $recipient->name , $mailing->subject);
		$mailing->body = str_replace("[FIRST_NAME]", $recipient->name , $mailing->body);

		$topEmailAd = TopEmailAd::get()->random(1)->first();

		return view('emails.credit-mail.resend-credit-mail',compact('sender','topEmailAd','creditsUrl','mailing'))->with('recipient',$recipient)->render();
	}




}