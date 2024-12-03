<html>
<head>
</head>
<body>


	<table width="600"  align="center">
		<tr>
			<td>
				<img src="/img/logo.png">
			</td>
		</tr>
	</table>





	{{-- The actual message --}}
	<table width="600" align="center">
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">

		<p><h1>Your mailing was sent!</h1></p>

		<p>Your mailing reached {{ $numRecipients }} people.  Check your stats, we track emails opens and clicks, we are the only mailer that does this.<p>

		 <p>So let's see how many actual opens you get and the clicks also.</p>

<b><a href="{{ config('listjoe.email_url') }}/mail_history">Click here to check your stats</a></b>

	<p>	If your offer did well, consider upgrading to gold or buyhing some credits. If you found a winner strike while the iron is hot!</p>

<div align="center"><h3><a href="{{ config('listjoe.email_url') }}/upgrade"> Upgrade Now! </a></h3></div>


		<p>Regards,<br>
		Jonah Klimack<br>
		Listjoe
</p>
<p> P.S. We have a 50% off special going on now,
	it may or may not still be on, upgrade now before
it's too late</p>

<div align="center"><h3><a href="{{ config('listjoe.email_url'	) }}/upgrade"> Upgrade Now! </a></h3></div>


			</td>
		</tr>
	</table>







<br/>
<hr/>
<br/>






{{-- the message footer, unsubcribe links ,etc --}}
<table width="600" align="center">
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
			You joined on {{ $sender->created_at }} and confirmed your email address: {{ $sender->email }}.
			<br/>

			The ip address: {{ $senderLogin->ip ?? '' }} was recorded.
			<br/>

			You last login date was on {{ $senderLogin->updated_at ?? '' }} with ip address:    {{ $senderLogin->ip ?? '' }}
			<br/><br/>

			<a href="104.248.123.185/unsubscribe/u/{{ $sender->username }}>Unsubscribe</a>
		</td>
	</tr>
</table>

<br/><br/>




{{-- copyright --}}
<table width="600" align="center">
	<tr>
		<td style="text-align: center;clear: both;font-size: 12px;">
			© 2024 Listjoe
		</td>
	</tr>
</table>


</body>
</html>