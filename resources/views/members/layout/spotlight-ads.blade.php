
<?php

$spotLightAds = App\Models\SpotlightAds::where('user_id','!=',Auth::user()->id)->take(4)->get()->all();

?>
<div class="spotlights">
  <img src="/img/spotlights_ads.png" class="label"/>
  <img src="/img/spotlights_ads_l.png" class="la"/>
  <img src="/img/spotlights_ads_r.png" class="ra"/>
  <div class="slide_left"></div>
  <div class="slide_right"></div>

  <div class="ads">
    <div class="wr">
      @foreach ($spotLightAds as $spotLightAd)
      <?php
      $adUser = App\Models\User::where('id',$spotLightAd->user_id)->get()->first();
      ?>


      {{ App\Models\SpotLightAds::recordView($spotLightAd) }}



      <div class="ad">
        <a href='{{ config('listjoe.member_profile') }}{{ $adUser->username }}'>
          <img src='{{ $adUser->profile_photo_url    }}' width='40' height='40' class='photo'/>
        </a>
        <div class="info">
          <a href="{{ config('listjoe.member_profile') }}{{ $adUser->username }}" class="name">
            {{ $adUser->name }}</a>
            <img class="star" src="/img/spotlights_ads_star.png"/>
            <div class="rating">Joe Rating: {{ Auth::user()->getRating() }}%</div>
          </div>
          <div class="title">{{ $spotLightAd->headline }}</div>
          <div class="text">{{ $spotLightAd->body1 }}</div>
          <div class="text">{{ $spotLightAd->body2 }}</div>

          <div class="href">
            <a href="{{ config('listjoe.backend_ad_url') }}spot/{{ $spotLightAd->id }}" target="_blank">
             {{ parse_url($spotLightAd->url, PHP_URL_HOST) }}
           </a>
         </div>
       </div>
       @endforeach

     </div>
   </div>
 </div>
