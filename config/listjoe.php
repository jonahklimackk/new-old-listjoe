<?php


return [


    /*
    |--------------------------------------------------------------------------
    | max_level
    |--------------------------------------------------------------------------
    |
    | The amount of levels we calculate in downline
    |
    */

    'max_level' => 6,




    /*
    |--------------------------------------------------------------------------
    | Admin Id
    |--------------------------------------------------------------------------
    |
    | The Admin User, top of everyone's downline
    |
    */

    'admin_id' => 8,



    /*
    |--------------------------------------------------------------------------
    | max credits
    |--------------------------------------------------------------------------
    |
    | the lwoer upper range of credits given per action
    |
    */
    'lower_credits_bound' => 20,
    'upper_credits_bound' => 50,



    /*
    |--------------------------------------------------------------------------
    | Admin Username
    |--------------------------------------------------------------------------
    |
    | The Admin User, top of everyone's downline
    |
    */

    'admin_username' => 'listjoe',



    /*
    |--------------------------------------------------------------------------
    | The link to the member profile
    |--------------------------------------------------------------------------
    |
    | in ca se i wante to sned them somewhere else soemday i duunno
    |
    */

    'member_profile' => '/members/profile/u/',


        /*
    |--------------------------------------------------------------------------
    | links in emails prefix
    |--------------------------------------------------------------------------
    |
    | in ca se i wante to sned them somewhere else soemday i duunno
    |
    */

    'email_url' => 'http://104.248.123.185',
    // 'email_url' => 'http://localhost:8000',



    /*
    |--------------------------------------------------------------------------
    | Path To Backend Ad Clicks
    |--------------------------------------------------------------------------
    |
    | in ca se i wante to sned them somewhere else soemday i duunno
    |
    */

    'backend_ad_url' => '/ads/click/',
];