  <div class="description">
    <h1 style="font-size: 21px;">Contact Your Fellow ListJoe Members</h1>
    <div class="your_privil sendmail_block">
      <img src="/img/sendmail1.png" class="headimg"/>
      <div class="cont">
        <div class="line">
          <div class="name">Last Mailing</div>
          <div class="value">
       {{ App\Models\Mailing::getHumanLastMailing(Auth::user()) }}
          </div>
        </div>
        <div class="line">
          <div class="name">Mailing Status</div>
          <div class="value">
            {{ App\Models\Mailing::getHumanNextMailing(Auth::user()) }}
            </div>
        </div>
        <div class="line">
          <div class="name">Credit Spending Limits</div>
          <div class="value">
            You can spend up to {{ $membership->credits_max }} credits per mailing.<br/>
            @if($user['membership'] == 'free')
            <a href="/members/upgrade" class="href1">Click here to increase your spending limits.</a>
            @endif
          </div>
        </div>
        <div class="line">
          <div class="name">Current Mailing Frequency</div>
          <div class="value">Send a mailing every {{ $membership->mailing_freq }} days.
          @if($user['membership'] == 'free')
       <br>
          <a href="/members/upgrade" class="href1">Click here to mail everyday.</a>
        </div>

          @endif
        </div>
      </div>
    </div>