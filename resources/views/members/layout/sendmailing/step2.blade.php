
<!-- https://nicedit.com/ -->
<!-- YOU HAVE TO LOAD ONLY FOR PAID MEMBERS -->
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    

    <div class="cont">
      <div class="line" style="margin-bottom: 6px;">
        <div class="name input">Your 
        ous Ads</div>
        <div class="value">
          <select id="previous_mail" data-mail_id="" style="width: 240px;">
            <option value ="-1">Select previous ads</option>
            @if(isset($previousMailings))
            @foreach($previousMailings as $previous)
            <option data-mail_id="{{ $previous->id }}">{{ $previous->subject }}</option>
            @endforeach
            @endif
          </select>
        </div>
      </div>
      <div class="line" style="margin-bottom: 6px;">
        <div class="name input">Url You Are Advertising</div>
        <div class="value">
          <input type="text" name="url" value="http://" style="width: 240px;"/>
        </div>
      </div>
      <div class="line" style="margin-bottom: 6px;">
        <div class="name input">Your subject</div>
        <div class="value">
          <input type="text" name="subject" value="" style="width: 240px;"/>
        </div>
      </div>
      <div class="fs13">
        To personalize the subject and/or message body, enter [FIRST_NAME]. <br/>
        It must be [FIRST_NAME] exactly or it will not work!
      </div>
      <br/>

      @if(Auth::user()->membership == 'free')
      <div style="color:red">
        <b>Want to fully unlock our email templates? As an upgraded member you can change your email fonts, colors and other cool features.</b>
      </div>
      <a href="/members/upgrade" class="href1"><b>Check out our upgrade options.</b></a>
      @endif
      <br/><br/>  


<div align="center">
      <textarea rows=15 cols=55 name='message'>{{ $mailing->message ?? ''}}  </textarea>
    </div>







      </div>
    </div>

    @include('members.layout.form-errors')