<html>
<head>
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
			<td>
				<!-- <img style="display: block;position: relative;top: -30px;left: -8px;" src="/img/topmemberad.png"/> -->
				<span style="background: #FFEEA0;width: 220px;float: left;margin: -40px 0px 0px 0px;padding: 2px 10px 10px;font-weight: bold;text-shadow: white 0 1px;cursor: pointer;
				">
				<div class="title">{{ $topEmailAd[0]->subject }}<br></div>
				<span>{{ $topEmailAd[0]->body1 }}</span><br>
				<span>{{ $topEmailAd[0]->body2 }}</span>
				<span>
					<br>
					<a href="members/tea/{{ $topEmailAd[0]->id }}" target="_blank"> {{ parse_url($topEmailAd[0]->url, PHP_URL_HOST) }}</a>


				</span>
			</span>
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
			Sender: <br>
			sender
			<br><br>
			Recipient:<br>
			recipient
			<br><br><br>
		</td>
	</tr>
</table>





{{-- click to earn credits--}}
<table width="800" align="center">
	<tr>
		<td>
			<div style="text-align: center">
				<a href="http://listjoe.com/earn/6f431a093bc22dc8bd1e687b9e428e57/jonahslistbuilders" style="background: #FFEE9E;
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

<?php
// dd($recipient->logins);
?>
		<td  width="300" style="font-size: 12px;">
			You received this email because you are a member at ListJoe.com.
			<br><br>
			You joined on {{ $recipient->created_at }} and confirmed your email address: {{ $recipient->email }}.
			<br/>

			The ip address: {{ $recipientLogin->ip }} was recorded.
			<br/>

			You last login date was on {{ $recipientLogin->updated_at }} with ip address:    {{ $recipientLogin->ip }}
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
			© 2019 ListJoe & Jonah Inc.
		</td>
	</tr>
</table>


</body>
</html>



