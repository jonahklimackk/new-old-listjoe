<?php

namespace App\Models;

use Auth;
use Cookie;
use App\Models\Mailing;
use App\Models\Logins;
use Carbon\Carbon;
use App\Models\Membership;
use App\Helpers\Error;
use Carbon\CarbonInterface;
use Spark\Billable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
// use Laravel\Jetstream\MustVerifyEmail;  
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;

/** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'sponsor_id',
        'membership'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /**
    * find out if the user is upgraded to any level
    *
    * @param string $Membership
    * @return boolean
    */
    public function isUpgraded()
    {
        // dd($this->membership);
        // return $this->membership != 'free' ? true : false;
        return true;
    }


    /**
    * find out if the user is at least a certain level
    *
    * @param string $atLeastMembership
    * @return boolean
    */
    public function isUpgradedToAtLeast($atLeastMembership)
    {   
        return true;
        // return ('gold');
    //    $atLeastMembershipModel = Membership::where('name', $atLeastMembership)->get()->first();
    //    $thisMembershipModelhipModel = Membership::where('name', $this->membership)->get()->first();

    //    if (is_null($atLeastMembershipModel) || is_null($thisMembershipModel))
    //     return 0;

    // return $thisMembershipModel->id >= $atLeastMembershipModel->id ? 1 : 0;
}


    /**
    * Get frequently referenced membership data
    *
    * @return array
    */
    public function getMembershipData()
    {
        $user = Auth::user();


    }



    /**
     * Eloquent relationship
     *
     * @return
     */
    public function membership()
    {
        // dd($this);
        // dd($this->membership);
        // dd(Membership::where('name', $this->membership)->get()->first());
        // return Membership::where('name', $this->membership)->get()->first();
        // return $this->membership();
        return Membership::where('id',1)->get()->first();
    }




    /**
     * Calculates Rating
     * simpleversion
     *
     * @return
     */
    public function getRating()
    {
        // easy version

        /*
        Give them points based on activity in last 3 months
        login = +1
        mailing = +=2
        referral += 3
        a week passes with no login = -1
        a week passes with no mailing = -2
        a week passes with no referral = -3
        */

        //now i need a logins table, which is


        // $logins = Logins::where('user_id', $this->id)->get()->count();
        // $loginScore = $logins;

        // $mailings = Mailing::where('user_id', $this->id)->get()->count();
        // $mailingScore = $mailings * 3;

        // $referrals = User::where('sponsor_id', $this->id)->get()->count();
        // $referralScore = $referrals * 5;

        // $totalScore = $loginScore + $mailingScore + $referralScore;

        // return $totalScore = $totalScore > 100 ? 100 : $totalScore;

        return 100;
    }



    /**
     * Sends user re-activation links
     *
     * @return boolean
     */
    public function sendActivationLink()
    {
        Mail::to($user)->send(new ActivationLink($user));

    }


    /**
     * Figure out who the sponsor is at time of registration or fucking die
     *
     * @return boolean
     */
    public static function getSponsor()
    {
        $sponsor = Cookie::get('aff') ? User::where('username', Cookie::get('aff'))->get()->first() : User::find(config('listjoe.admin_id'));

        return isset($sponsor) ? $sponsor : die('no sponsor id contact support immediately');
    }





    /**
     * return how many personally sponsored (how many on lv 1)
     *
     * @return integer
     */
    public function getReferralCount(User $user)
    {
        // dd($user);
        return $user->where('sponsor_id',$user->id)->get()->count();
    }


      /**
     * get social profile through user
     *
     * @return integer
     */
    public function social()
    {
        return $this->hasOne('App\Models\SocialProfile');
    }


      /**
     * get messages through user object
     *
     * @return integer
     */
    public function message()
    {
        return $this->hasMany('App\Models\Message');
    }

     /**
     * get mailings through user object
     *
     * @return integer
     */
    public function mailing()
    {
        return $this->hasMany(Mailing::class);
    }


     /**
     * returns num of unread msgs
     *
     * @return integer
     */
    public function unreadMessages()
    {
        return 1;
    }


     /**
     * returns num of unread msgs
     *
     * @return integer
     */
    public function canSendMail()
    {
        return true;
    }



}
