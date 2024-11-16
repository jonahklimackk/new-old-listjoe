<?php

namespace app\Helpers;

use Auth;
use App\Products;
use App\CommissionStructure;


class CalculatesCommission
{

	/**
	* Calculate the commission
	*
	* @return void
	*/
	public static function calc($order)
	{
		$price = Products::where('id', $order->product_id)->get()->pluck('price')->first();

		$commissionStructure = CommissionStructure::where('level', 1)->where('affiliate_membership', Auth::user()->membership)->get()->first();

		$commission = $price * $commissionStructure->percentage/100;

		return $commission;
	}
}