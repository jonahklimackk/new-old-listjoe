<html>
<head>
	  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/main.css" type="text/css" />
</head>
<body>

	{{-- Image Header --}}
	<table width="800" align="center">
		<tr>
			<td>
				<!-- <img src="img/mail_head.png"> -->
			</td>
		</tr>
	</table>




	<table width="800"  align="center">
		<tr>
			{{-- social profile and msg from colleague --}}
			<td>
				<table>
					<tr>
						<td>
							{{-- profile photo - div needed for circle effect --}}
							<div style="margin-right: 10px;float:left;">
								<div style="border-radius: 100px;margin: 5px;overflow: hidden;">
									<a href='members/profile/u/{{ $sender->username }}'>
										<img src='{{ $sender->profile_photo_url }}' width='100' height='100' class='photo'/>
									</a>
								</div>
							</div>
						</td>

						{{-- colleague message --}}
						<td style="font-weight: bold;line-height: 20px;color: #222;margin: 6px 30px 0 0;float:left;font-size: 14px;width: 270px;">
							This is a message from <br/>
							<span style="color:#D94C55;font-size: 17px;">{{ $sender->name }}</span><br/>
							a colleague at Listjoe.com.<br/>
							See below for subscription information and to remove.
						</td>
					</tr>
					<tr>
						<td>
<!-- 							{{-- twitter --}}
							<a href="http://www.twitter.com/jonahklimack" target="_blank"><img src="/img/t.png" height="24px" width="24px" style="margin-right: 5px;"/></a>
							{{-- facebook --}}
							<a href="https://www.facebook.com/listjoecom" target="_blank"><img src="/img/f.png" height="24px" width="24px" style="margin-right: 5px;"/></a> -->
						</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</td>


			{{-- top email ad --}}
			<?php
			// dump($topEmailAd[0]->id);	
			// dd($topEmailAd[0]->body1);
			?>
			<td width="200px">

<div class="sidebar_vda">
  <div class="head">
    <a href="{{ config('member_profile') }}{{ $sender->username }}" class="name">
    {{ $sender->name }}
    </a>
    <div class="rating">
      Joe Rating: {{ $sender->getRating() }}%
    </div>
  </div>
  <div class="text">
    <div class="title">
      {{ $topEmailAd[0]->headline }}
    </div>
    <div class="desc1"> 
      {{ $topEmailAd[0]->body1 }}
    </div>
    <div class="desc2">
      {{ $topEmailAd[0]->body2 }}
    </div>
  </div>
  <div class="url">
    <a href="tma/{{ $topEmailAd[0]->id }}" id="url" target="_blank">
      {{ parse_url($topEmailAd[0]->url, PHP_URL_HOST) }}
    </a>
  </div>
</div>

				</span>
			</span>

		</td>
		<td>

		</td>

	</tr>
</table>




{{-- The actual message --}}
<table width="800" align="center">
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2">
			<br><br>
			THE MESSAGE GOES HERE<br>
			subject: {{ $mailing->subject }}<br>
			body: {{ $mailing->body }}<br>
			<br>
			sender: {{ $sender->id }} <br>
			sender: {{ $sender->name }} <br>
			sender: {{ $sender->email }} <br>
			sender sponsor id: {{ $sender->sponsor_id }} <br>
			<br><br>
			Recipient: {{ $recipient->id }} <br>
			Recipient: {{ $recipient->name }} <br>
			Recipient: {{ $recipient->email }} <br>
			recipient sponso	r id: {{ $recipient->sponsor_id }} <br>
			<br><br><br>
		</td>
	</tr>
</table>





{{-- click to earn credits--}}
<table width="800" align="center">
	<tr>
		<td>
			<div style="text-align: center">
				<a href="{{ $creditsUrl }}" style="background: #FFEE9E;
				display: inline-block;
				margin: 0 auto;
				color: #0052AA;
				padding: 10px 20px;
				border-radius: 20px;
				font-weight: bold;
				font-size: 18px;
				text-shadow: white 0 1px;">
				Click Here to View Website and earn Credits!
			</a>
		</div>
	</td>
</tr>
</table>



<br/>
<hr/>
<br/>






{{-- the message footer, unsubcribe links ,etc --}}
<table width="800" align="center">
	<tr>
		<td width="300" style="font-size: 12px;">
			<b>Report Ad</b>
			<br>
			We are not responsible for false or misleading information sent from other members.
			We recommend you investigate all offers thoroughly before making any purchase decisions.

			<br><b>Report Ad</b><br/>
			for inappropriate content
			<a href="mailto:support@listjoe.com?subject=FW:%20Inappropr    iate%20Email&body=This%20email%20with%20id%206f431a093bc22dc8bd1e687b9e42    8e57%20is%20inappropriate%20or%20breaks%20frames.">support@listjoe.com</a>
		</td>

		{{-- spacer --}}
		<td  width="200">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>

		<td  width="300" style="font-size: 12px;">
			You received this email because you are a member at ListJoe.com.
			<br><br>
			You joined on {{ $recipient->created_at }} and confirmed your email address: {{ $recipient->email }}.
			<br/>

			The ip address: {{ $recipientLogin->ip ?? '' }} was recorded.
			<br/>

			You last login date was on {{ $recipientLogin->updated_at ?? '' }} with ip address:    {{ $recipientLogin->ip ?? '' }}
			<br/><br/>

			<a href="http://listjoe.com/unsubscribe/u/jonahslistbuilders">Unsubscribe</a>
		</td>
	</tr>
</table>

<br/><br/>




{{-- copyright --}}
<table width="800" align="center">
	<tr>
		<td style="text-align: center;clear: both;font-size: 12px;">
			© 2024
		</td>
	</tr>
</table>


</body>
</html>



