@include('members.layout.header')
@include('members.layout.menu')
@include('members.layout.sidebar-vda')

<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<div class="wrapper">
  <style>
    .message-large-red{
      color: red;
      text-align: center;
      font-size: 32px;
      line-height: 40px;
      font-family: Arial;
    }
    #button-buynow-blue{
      bottom: 25px;
      position: absolute;
      right: 114px;
    }
  </style>
  <div class="header-content-description-wrapper">
    <div class="header-content-description-line"></div>
    <div class="header-content-description-text">

    </div>
  </div>
  <script>
    $('.header-content-description-wrapper').appendTo('.header-content-description')
  </script>

  <div class="main-content-main">
    <div class="main-content-wrapper2">
      <p class="global_info_paragraph message-large-red">
        Are you ready to take REAL action and email EVERY ListJoe member…right now?
      </p>
      <p class="global_info_paragraph">
        ListJoe has become something that every home based business owner needs
        a responsive list of active buyers that are all interested in the same thing  making money online!
      </p>
      <p class="global_info_paragraph">
        With ListJoe Solo Tokens you have the opportunity to get your ad in
        front of every single one of these home based business owners…right now!
      </p>
      <p class="global_info_paragraph">
        You will reach every single member at ListJoe, right now, without
        having to spend a single credit.
      </p>
      <p class="global_info_paragraph">
        Unfortunately, we cannot guarantee the availability of solos.
      </p>
      <p class="global_info_paragraph">
        Fortunately, we do sell them at an awesome discount if you buy in bulk,
        so the next time that they are available you can stock up on them.
      </p>
      <div style="position: relative;">
        <div class="optionbuy">
          <div class="goption">
            <p id="1">
              2 Solo Tokens $17.00
            </p>
    <style>.pp-YV5TYLDCE2WB4{text-align:center;border:none;border-radius:1.5rem;min-width:11.625rem;padding:0 2rem;height:2.625rem;font-weight:bold;background-color:#FFD140;color:#000000;font-family:"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.25rem;cursor:pointer;}</style>
<form action="https://www.paypal.com/ncp/payment/YV5TYLDCE2WB4" method="post" target="_top" style="display:inline-grid;justify-items:center;align-content:start;gap:0.5rem;">
  <input class="pp-YV5TYLDCE2WB4" type="submit" value="Buy Now" />

</form>



          <p id="2"><label for="21">5 Solo Tokens $37.00</label> </p>
        
        <style>.pp-JQ4C4GAHFQMMN{text-align:center;border:none;border-radius:1.5rem;min-width:11.625rem;padding:0 2rem;height:2.625rem;font-weight:bold;background-color:#FFD140;color:#000000;font-family:"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.25rem;cursor:pointer;}</style>
<form action="https://www.paypal.com/ncp/payment/JQ4C4GAHFQMMN" method="post" target="_top" style="display:inline-grid;justify-items:center;align-content:start;gap:0.5rem;">
  <input class="pp-JQ4C4GAHFQMMN" type="submit" value="Buy Now" />
</form>


        <p id="3"><label for="22">15 Solo Tokens $97.00</label> </p>


<style>.pp-4DWG3PNYQRZXY{text-align:center;border:none;border-radius:1.5rem;min-width:11.625rem;padding:0 2rem;height:2.625rem;font-weight:bold;background-color:#FFD140;color:#000000;font-family:"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.25rem;cursor:pointer;}</style>
<form action="https://www.paypal.com/ncp/payment/4DWG3PNYQRZXY" method="post" target="_top" style="display:inline-grid;justify-items:center;align-content:start;gap:0.5rem;">
  <input class="pp-4DWG3PNYQRZXY" type="submit" value="Buy Now" />

</form>

      <p id="4"><label for="23">40 Solo Tokens $197.00</label> </p>

<style>.pp-U4CRQSCJ6MKR2{text-align:center;border:none;border-radius:1.5rem;min-width:11.625rem;padding:0 2rem;height:2.625rem;font-weight:bold;background-color:#FFD140;color:#000000;font-family:"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.25rem;cursor:pointer;}</style>
<form action="https://www.paypal.com/ncp/payment/U4CRQSCJ6MKR2" method="post" target="_top" style="display:inline-grid;justify-items:center;align-content:start;gap:0.5rem;">
  <input class="pp-U4CRQSCJ6MKR2" type="submit" value="Buy Now" />
</form>

  </div>
  <div id="error-message"></div>
</div>
</div>

<p class="global_info_paragraph">
  The list that you have been looking for is finally here.  It is now
  up to you to decide if you are truly ready to make it online, or if
  you prefer to wait on the sidelines a little longer and watch the
  beautiful world of online freedom pass you by.
</p>
<p class="global_info_paragraph">
  Refund Policy: you can get a full refund only if you have not sent
  you ad yet.
</p>

</div>

</div> 

<script>
  function getPlanAndGo(planId)
  {
    var stripe = Stripe('pk_test_Hftuw18q2xHaKfcILtFIo6tr00J9CPG3hU');

    var checkoutButton = document.getElementById('checkout-button-sku_'+planId);
    checkoutButton.addEventListener('click', function () {

    stripe.redirectToCheckout({
      items: [{sku: 'sku_'+planId, quantity: 1}],
      successUrl: 'http://killthespammer.com/success',
      cancelUrl: 'http://killthespammer.com/cancelled',
      clientReferenceId: '{{ Auth::user()->id }}|'+planId,
      customerEmail: '{{ Auth::user()->email }}'
    })
    .then(function (result) {
      if (result.error) {
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
  }
</script>






</div>

</div>
</div>



@include('members.layout.footer')