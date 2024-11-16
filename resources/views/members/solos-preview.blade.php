
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="/js/jquery.sceditor.min.js"></script>

<h1>Subject: {{ $request['subject'] }}</h1>
<br>
<div style="font-family: arial;width: 820px;">
  <a href="http://listjoe.com"><img src="http://listjoe.com/img/mail_head.png"/></a>
  <div style="position: relative;width: 670px;margin: 0 auto;overflow: hidden">
    <div style="margin-right: 10px;float:left;">
      <div style="border-radius: 100px;margin: 5px;overflow: hidden;"><a href='http://listjoe.com/members/profile/u/jimmylistbuilders'>
        <img src='http://listjoe.com/upload/70fec00961924cf71778bdd80c30c602.jpg' width='100' height='100' class='photo'/>
      </a></div>


    </div>
    <div style="font-weight: bold;line-height: 20px;color: #222;margin: 6px 30px 0 0;float:left;font-size: 14px;width: 270px;">
      This is a message from <br/>
      <span style="color:#D94C55;font-size: 17px;">9*(&)*(*& sdfsf</span><br/>
      a colleague at Listjoe.com.<br/>
      See below for subscription information and to remove.
    </div>


  </div>
  <div style="clear: both;width: 670px;margin: 30px auto;font-size: 14px;">
    {!! $request['message'] !!}

  </div>
  <div style="text-align: center">
    <a href="{{ $request['url'] }}" style="background: #FFEE9E;
    display: inline-block;
    margin: 0 auto;
    color: #0052AA;
    padding: 10px 20px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 14px;
    text-shadow: white 0 1px;">
    Click Here to View Website and earn Credits!
  </a>
</div>
<br/>
<hr/>
<br/>
<div style="
font-size: 12px;
overflow: hidden;
width: 670px;
margin: 0 auto;">
<div style="float:left;max-width:45%;width:45%">
  <b>Report Ad</b><br/>
  We are not responsible for false or misleading information sent from other members. We recommend you investigate all offers thoroughly before making any purchase decisions.
  <br/>
  <b>Report Ad</b><br/>
  for inappropriate content
  <a href="mailto:support@listjoe.com?subject=FW:%20Inappropriate%20Email&body=This%20email%20with%20id%20123456%20is%20inappropriate%20or%20breaks%20frames.">support@listjoe.com</a>
</div>
<div style="float:right;max-width:45%;width:45%">
  You received this email because you are a member at ListJoe.com.<br/>
  You joined on 2016-11-07 19:10:00 and confirmed you email address: jonahscellphone@gmail.com.<br/>
  The ip address: 73.55.92.169 was recorded.<br/>
  You last login date was on 2019-07-06 10:47:10 with ip address: 73.55.92.169<br/><br/>

  <a href="http://listjoe.com/index/unsubscribe/u/jimmylistbuilders">Unsubscribe</a>
</div>
</div>
<br/><br/>
<div style="text-align: center;clear: both;font-size: 12px;">© 2012 ListJoe</div>
</div>

<br>

<div class="row">

  <div class="col-md-4" >
    <button onclick="history.back()" class="btn btn-alert">
      Go Back
    </button>
  </div>
  <div class="col-md-offset-8 col-md-4">
    <form action="queue" method="post">
        @csrf
        <input type="hidden" name='url' value="{{ $request['url'] }}">
        <input type="hidden" name='subject' value="{{ $request['subject'] }}">
        <input type="hidden" name='message' value="{{ $request['message'] }}">
        <input type="hidden" name='credits' value="{{ $request['credits'] }}">
    <button class="btn btn-primary">
      I'm Good Send As Is
    </button>
</form>
  </div>


</div>
