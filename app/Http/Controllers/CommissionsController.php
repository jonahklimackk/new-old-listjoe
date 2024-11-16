<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Membership;
use App\Models\SubscriptionOrders;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Helpers\CalculatesCommission;

class CommissionsController extends Controller
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
	* show the earnings for any this month
	*
	* @return void
	*/
	public function earnings()
	{
		$period = new Carbon();
		$total = 0;

		//this works but if not this month, it lists the item an doesn't total the commissio
		// this might be onfusing to members, fix it

		$subscriptionOrders = SubscriptionOrders::where('sponsor_id',Auth::user()->id)->get()->all();

		foreach($subscriptionOrders as $subscriptionOrder) 
		{
			if ($subscriptionOrder->created_at->englishMonth == $period->englishMonth && $subscriptionOrder->created_at->year == $period->year)
			{
				$subscriptionOrder->membership_name = Membership::where('id',$subscriptionOrder->membership_id)->get()->first()->name;
				$subscriptionOrder->commission = $subscriptionOrder->price * 0.5;
				$total += $subscriptionOrder->commission;
			}
		}
		return View('members.earnings', compact('subscriptionOrders','period', 'total'));

	}
}
