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
	* Get the last mailing that was sent
    *
	* @param User
	* @return Mailing / null
	*/
	public static function getLastMailing(User $user)
	{
		return Mailing::where('user_id', $user->id)->where('status','sent')->get()->sortByDesc('updated_at')->pluck('updated_at')->first();
	}

    /**
     * Get the next mailing date
     *
     * @return integer
     */
    public static function getNextMailing(User $user)
    {
    	$mailing = Mailing::getLastMailing($user);
        return isset($mailing) ? $mailing->addDays($user->membership()->mailing_freq) : false;
    }


    /**
     * Return the human time left in days of current mailing status
     *
     * @return integer
     */
    public static function getHumanNextMailing(User $user)
    {
        $nextMailing = Mailing::getNextMailing($user);
        if (!$nextMailing)
            return "You can send a mailing now!";

        $now = Carbon::now();
        $timeLeftHuman = $now->diffForHumans($nextMailing, true);
        if ($now < $nextMailing)
            return "You next mailing is in ".$timeLeftHuman.".";
        else
            return "You next mailing is ".$timeLeftHuman." from now.";
}

/**
     * Return the human time of the last mailing
     *
     * @param User
     * @return Carbon
     */
    public static function getHumanLastMailing(User $user)
    {
        return is_null(Mailing::getLastMailing($user)) ? 'No previous mailings.' : Mailing::getLastMailing($user)->toRfc850String();
    }



    /**
     * Return the time left in days of current mailing status
     *
     * @return integer
     */
    public static function canSendMail(User $user)
    {
    	$nextMailing = Mailing::getNextMailing($user);
    	$now = new Carbon();

    	return $nextMailing < $now ? true : false;
    }




    /**
     * Return the time left in days of current mailing status
     *
     * @return integer
     */
    // public function user()
    // {
    //     return $this->hasMany(User::class);
    // }




}
