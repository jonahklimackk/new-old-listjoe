@include('members.layout.header')
@include('members.layout.menu')
@include('members.layout.sidebar-vda')





@include('members.layout.sidebar-spotlight')

<div class="wrapper">

  @include('members.layout.sendmailing.styles')




  @include('members.layout.sendmailing.statusbox')

{{ session('message') }}

  @if(App\Models\Mailing::canSendMail(Auth::user()))

  <form method="post" action="/sendmail/queue">
    @csrf


    @include('members.layout.form-feedback')

    @include('members.layout.sendmailing.step1')
    @include('members.layout.sendmailing.step2')



    <div style="text-align: center">
    <button class="blue_button" style="margin: 0 35px;" name="send" value="send">
        Send message
      </button>

            <button class="blue_button" style="margin: 0 35px;" name="preview" value="preview"> 
        Preview Mail
      </button>
    </div>
  </form>


  <br/><br/>

  <!-- @include('members.layout.sendmailing.guidelines') -->


  {{-- //this is the if statement before step1 --}}
  @endif


  <script>


    var limit = {{ $membership->credits_max }}


    function onChangeMailBody()
    {
      count = 5000 - $('#message').val().length
      $('#char_left').text(count)
    }
    $('#message').keyup(onChangeMailBody)
    $('#message').keydown(onChangeMailBody)
    $('#message').bind('paste', onChangeMailBody)


    $('#preview').click(function() {
      message = $('[name="message"]').val();
      $('#message_preview').val(message);
      $('#form_preview').submit()
    })

    function replaceAll(str, what, to) {
      return str.split(what).join(to);
    }

    function changeCredits()
    {

      credits = parseInt($('[name=credits]').val());
      number_people_downline = parseInt($('#number_people_downline').text());
      bonus_credits = parseInt($('#bonus_credits').text());
      guar_send = number_people_downline + bonus_credits;

      total = credits + guar_send < limit ? credits + guar_send : limit;
      credits = total - guar_send;


      $('#credits_spent').text(credits);
      $('#total_recipients').text(total)
      $('#total_recipients2').text(total + ' recipients')
    }

    $('[name=credits]').keyup(changeCredits).keydown(changeCredits).change(changeCredits())



    $('#previous_mail').change(function() {
      if ($('#previous_mail option:selected').val() != -1) {
        mail_id = $('#previous_mail option:selected').attr('data-mail_id');
        $('.step2').addClass('wait');
        $('html').addClass('wait');
        $.get('/sendmail/previous/' + mail_id, function(data) {
          if (data === 'false') {

          } else {
            $('[name=subject]').val(data.subject)
            $('[name=url]').val(data.url)
            $('[name=message]').val(data.body)
            editor.setData(data.body);
          }
          $('.step2').removeClass('wait');
          $('html').removeClass('wait');
        })
      }
    })

    $(document).ready(function() {
      changeCredits()

    });

  </script>

  <style>
    .content > .wrapper {
      width: 499px;
    }
  </style>

</div></div>


@include('members.layout.footer')

