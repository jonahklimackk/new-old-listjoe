<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class TopMemberAds extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
protected $fillable = [
    'user_id', 'headline', 'body1', 'body2', 'url'
];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * Eloquent relationship
     *
     * @return array
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }




    /**
     * Return some ads
     *
     * @return array
     */
    public static function get($numAds)
    {
        return TopMemberAds::where('user_id','!=', Auth::user()->id)->get()->take($numAds)->all();
    }

    /**
     * Count a view for the ad
     *
     * @param TopMemberAds
     * @return void
     */
    public static function recordView(TopMemberAds $topMemberAd)
    {
        $topMemberAd->views += 1;
        $topMemberAd->save();
    }

}
