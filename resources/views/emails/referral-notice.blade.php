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

		<p><h1>You referred somebody new to Listjoe!!</h1></p>

		<p>
			Name {{ $newMember->name }} <br>
			Email {{ $newMember->email }} <br>
			Username {{ $newMember->username }} <br>
			Joined At {{ $newMember->created_at }}




		<p>You earned 1000 credits!</p>



<div align="center"><b><a href="{{ config('listjoe.email_url') }}/members/downline">Click here to check your downline</a></b></div>

	<p>	Remember, if this person upgrades and you are not gold, you are losing
	out on a commission! Free members only get 15% commission, bronze gets 25%, silver gets 35% and gold gets 50%</p>

<p>If this person upgrades to Gold, and you are gold, you wll earn a nice commission!</p>
<p><B> <I>But you have to do it first!</I></B></p>

<p>Consider upgrading your membership so you can get the higher commission rates
on all of your downline before they upgrade first.</p>


<div align="center"><b><a href="{{ config('listjoe.email_url') }}/members/upgrade">Click Here to upgrade</a></b></div>

		<p>regards,<br>
		Jonah Klimack<br>
		Listjoe
</p>
<p> P.S. Keep up the good work {{ $sponsor->name }}</p>

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
			You joined on {{ $sponsor->created_at }} and confirmed your email address: {{ $sponsor->email }}.
			<br/>

			The ip address: {{ $sponsorLogin->ip ?? '' }} was recorded.
			<br/>

			You last login date was on {{ $sponsorLogin->updated_at ?? '' }} with ip address:    {{ $sponsorLogin->ip ?? '' }}
			<br/><br/>

			<a href="{{ config('listjoe.email_url') }}/unsubscribe/u/{{ $sponsor->username }}>Unsubscribe</a>
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