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

        <p><h2>Welcome to Listjoe!</h2></p>


<p>
    Congratulations!
</p>
<p>
    {{ $customer->name }} just ordered the {{ $subscriptionOrder->name }}
</p>
<p> If you are a gold member you're getting 50% for this order.</p>
<p>Great Job!</p>

<p>If you haven't yet upgraded you're not getting 50% on this or future orders
    by any of your referrals.

        

<div align="center">
        <p><b><h2><a href="http://listjoe.com/members/upgrade">Click Here to get 50% off all memberships and credit buys for a limited time! </a></h2></b></p></div>

        <p><i><b> Test your next offer in just a few clicks,</b></i> or, use the steady approach of gaining a dozen opt in members per mailing. </p>

        <p>That's another way to play the credit mailer game, just send the same ad over and over inviting people to your mailing list. You'll get dozens of subscribers per day, nice and steady.</p>


<div align="center">
    <p><h2><a href="http://listjoe.com/members/upgrade">Recommended by every top mailer out there, upgrade to Listjoe right now and send your mailing</a></h2></p></div>

<br>
    <p>Best of luck in your promotions,<br>
        Jonah Klimack, <br> 
        Founder, <br>
        Listjoe
    </p>
    <p> P.S. You may still have time to upgrade and get 50% commission. Check your stats and see how much commission you're getting now vs if you upgrade.
        <a href="{{ config('listjoe.email_url') }}/members/reftools"> stats </a></p>

<p><b><a href="{{ config('listjoe.email_url') }}/members/upgrade">upgrade now</a></p>
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


            <a href="{{ config('listjoe.email_url') }}/unsubscribe/u/{{ $sponsor->username }}>Unsubscribe</a>KF
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