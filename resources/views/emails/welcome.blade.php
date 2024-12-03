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

		<p><h1>Welcome to Listjoe!</h1></p>

		<p>{{ strtok($recipient->name,' ') }} here is an interesting yet profitable way to advertise your website, whatever that may be...</p>

		<p><b>In 5 minutes, people will <i>visit</i> your website, Guaranteed!</b></p>
		
		<p>Whenever I had something to promote, and couldn't think off the top of my head any other place to advertise it, <i><b>I turned to Listjoe and credit for mail type mailers.</b></i></p>

		<p>	{{ strtok($recipient->name,' ') }}	sometimes, I use them just to get a feeling for the ad I want to send. With Listjoe you can... <b><i>in an instant</i></b>, get the feedback  need to tell you if this thing you're  promoting is a winner or not.
		</p>

		<p>It's easy enough to get started at Listjoe {{ strtok($recipient->name,' ') }}, just build up some credits and then send a mailing. For every email you click on, you'll get between 10 and 50 credits. It's random everytime so you never know if you're going to get 50 credits, or just 10, but either way, you only need to click on a dozen or so emails and you've got 3 or 4 hundred credits.</p>

		<p><b>{{ strtok($recipient->name,' ') }} next time you have something to promote... <i>turn to Listjoe.</i></b> It's like dipping your toes in the water to see if its too cold. if your ad is too cold, or if it's really hot. You'll find out in just a few minutes.</p>

		<p><b>There's no other place I know of to get instant feedback on your offer like this.</b></p>


		<p>Of course , as an upgraded member you get the maximum bang for your buck....</p>

		<div align="center"><h1>
		<a href="http://listjoe.com/members/upgrade"> All of our prices are 50% off!</a></h1>
		</div>

		<p><i>Hundreds of people are joining every day</i>, and its happening really really fast, so here you have a new exciting list of people eager to read your listjoe emails.</p>

<div align="center">
		<p><b><h1><a href="http://listjoe.com/members/upgrade">Click Here to get 50% off all memberships and credit buys for a limited time! </a></h1></b></p></div>

		<p><i><b> Test your next offer in just a few clicks,</b></i> or, use the steady approach of gaining a dozen opt in members per mailing. </p>

		<p>That's another way to play the credit mailer game, just send the same ad over and over inviting people to your mailing list. You'll get dozens of subscribers per day, nice and steady.</p>


<div align="center">
	<p><h1><a href="http://listjoe.com/members/upgrade">Recommended by every top mailer out there, upgrade to Listjoe right now and send your mailing</a></h1></p></div>

<br>
	<p>Best of luck in your promotions,<br>
		Jonah Klimack, <br> 
		Founder, <br>
		Listjoe
	</p>
	<p> P.S. {{ strtok($recipient->name,' ') }}  of course there's a ps. Wouldn't you like to have an instant traffic faucet like Listjoe at your finger tips?</p>

<p><b><a href="http://listjoe.com/members/upgrade">upgrade now</a></p>
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
			You joined on {{ $recipient->created_at }} and confirmed your email address: {{ $recipient->email }}.
			<br/>

			The ip address: {{ $recipientLogin->ip ?? '' }} was recorded.
			<br/>

			You last login date was on {{ $recipientLogin->updated_at ?? '' }} with ip address:    {{ $recipientLogin->ip ?? '' }}
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