
@include('members.layout.header')
@include('members.layout.menu')
@include('members.layout.sidebar-vda')
<?php
// dump($key1);  
?>

<!-- this stupid fucking wrapper is what keeps it aligned, but for the home page its before the spotlight ads, on other pages, it's after wtf -->
<div class="wrapper">
  <script>
    var timeleft = 100949;

    $(document).ready(changeTimeLeft)
    window.setInterval("changeTimeLeft()", 1000);
  </script>

  @include('members.layout.spotlight-ads')




  <div style="height: 200px;">
    <div class="profile">
      <div class="title">
        Here's Your Listjoe Link to get a downline:
      </div>
      <div class="link"><a href="#" onclick="window.prompt('Press ctrl+c to copy your affiliate link to clipboard.','http://listjoe.com/aff/{{ Auth::user()->username }}')">http://listjoe.com/aff/{{ Auth::user()->username }}</a></div>
      <div class="line">
        <div class="name">Membership: </div>
        <div class="value">
          {{ ucfirst( Auth::user()->membership) }}
      
          Send up to {{ Auth::user()->membership()->credits_max }} emails every  {{ Auth::user()->membership()->mailing_freq }} days.)</div>
        </div>
        <div class="line">
          <div class="name">Mailing Status:</div>
          <div class="value">
           {{ App\Models\Mailing::getHumanNextMailing(Auth::user()) }}
         </div>
       </div>
       <div class="line">
        <div class="name">Total Credits:</div>
        <div class="value">{{ Auth::user()->credits }} (<a href="/members/buycredits">buy more credits</a>)</div>
      </div>
      <div class="line">
        <div class="name">Referrals:</div>
        <div class="value">{{ App\Helpers\Downline::getCount(Auth::user()) }}(<a href="/members/downline">view</a>) (<a href="/members/upgrade">upgrade</a>)</div>
      </div>
    </div>


  </div>
  {{-- the abovecloses div sthl height 200 abov e  --}}

  <div class="description">
    <h1>How Do I Get Started?</h1>
    <div class="par">
      <b>I know how it is</b>, you're busy, you just joined this site but
      you have 23 seconds to figure it out before you move on, right?
    </div>
    <div class="par">
      <b>Slow down for a second, you're in the right place, this is the best website
      on the internet to get leads and sales - and I will walk you through it right now.</b>
      There are a lot of links over to the left, but the only one
      you need to get familiar with at this point is the <b><a href="/sendmail">Send Mail</a></b> button.
    </div>
    <div class="par">
      List Joe is an extremely easy-to-use and profitable email marketing service.
      To get started, all you have to do is go to the <b><a href="/sendmail">Send Mail</a></b> page and do the following:
      <ul style="list-style-type: disc;margin: 16px 30px;font-weight: bold">
        <li>
          Enter the link that you are advertising
        </li>
        <li>
          Copy and paste your email and subject line into the email box
        </li>
        <li>
          And add the amount of credits you want to spend<
        </li>
      </ul>
    </div>
    <div class="par">
      Then click send, and presto: <b>Your email ad will be sent out to tons targeted internet marketers!</b>
    </div>
    <div class="par">
      Plus, you can see all your results in your <b><a href="/mail_history">Mail History</a></b>,
      and see how many people clicked on your link and visited your website.
    </div>

    <h1>How to Maximize Your Results</h1>
    <div class="par">
      List Joe is a credit-based mailer. That means you need credits to send out your emails, and each credit is worth 1 email.
      To earn more credits, be sure to read the emails in your inbox and click on the links,
      that way you will always have credits to send out more ads at List Joe.
    </div>
    <div class="par" style="font-size: 11px">
      IMPORTANT: Make sure to click ‘this is not spam’ for your first email so your email provider knows you are expecting our mail.
    </div>
    <div class="par">
      Don’t want to read emails to earn credits? That’s ok! We have some great upgrade
      options that you can purchase to get up to 3000 bonus credits added to each email you send.
      You won’t ever have to read a single email! <b><a href="/members/upgrade">Upgrade now</a></b>
    </div>
    <div class="par">
      There is also another powerful way to earn money with List Joe.
      When you signed up you were given an affiliate link which you can use to promote and earn huge commissions.
      We have some amazing marketing tools you can use to help you with your campaigns, access them <b><a href="/members/reftools">here</a></b>.
    </div>
  </div>




  @include('members.layout.footer')










