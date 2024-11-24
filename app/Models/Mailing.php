<?php

namespace App\Models;

use Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Mailing extends Model
{
    	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//protected $fillable = [];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	/*protected $hidden = [];*/


	/**
	 * The attributes that aren't mass assignable
	 * acts as a blacklist, not whitelist, so all others included
	 *
	 * @var array
	 */
	protected $guarded = ['id'];


	/**
	* Get the newest mailing
    *
	* @param User
	* @return updated_at
	*/
	public static function getLastMailingDate(User $user)
	{
        return Mailing::where('user_id', $user->id)->get()->sortByDesc('updated_at')->pluck('updated_at')->first();
    }

    /**
     * Get the next mailing date
     *
     * @return integer
     */
    public static function getNextMailingDate(User $user)
    {
    	$mailing = Mailing::getLastMailingDate($user);
        // dd($user->membership()->name);
        // dd($user->membership()->name);
        return isset($mailing) ? $mailing->addDays($user->membership()->mailing_freq) : false;
    }


    /**
     * Return the human time left in days of current mailing status
     *
     * @return integer
     */
    public static function getHumanNextMailing(User $user)
    {
        $nextMailing = Mailing::getNextMailingDate($user);
        if (!$nextMailing)
            return "You can send a mailing now!";

        $now = Carbon::now();
        $timeLeftHuman = $now->diffForHumans($nextMailing, true);
        if ($now < $nextMailing)
            return "Your next mailing is in ".$timeLeftHuman.".";
        else
            return "Your next mailing is ".$timeLeftHuman." from now.";
    }

/**
     * Return the human time of the last mailing
     *
     * @param User
     * @return Carbon
     */
public static function getHumanLastMailing(User $user)
{
        // dd(Mailing::getLastMailingDate($user));
    return is_null(Mailing::getLastMailingDate($user)) ? 'No previous mailings.' : Mailing::getLastMailingDate($user)->toRfc850String();
}



    /**
     * Can the user send mail right now
     *
     * @return integer
     */
    public static function canSendMail(User $user)
    {
        return true;
    	$nextMailing = Mailing::getNextMailingDate($user);
    	$now = new Carbon();

        //if no previous mailings 
        //then yes, user can send mail
        if (!($nextMailing))
            return true;

        return $nextMailing < $now ? true : false;
    }







}
