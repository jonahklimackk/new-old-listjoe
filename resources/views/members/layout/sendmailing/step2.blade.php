    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>



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

<!--       <textarea style="width: 452px;height: 218px;max-width: 52px;
      min-width: 452px;" id="editor" name="message"></textarea>
 -->

        <script>
          let editor;

          ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( newEditor => {
            editor = newEditor;
          } )
          .catch( error => {
            console.error( error );
          } );
        </script>



    <textarea name="message" style="height: 161px;width: 450px;" id="message" name="message" id="editor"></textarea> 







<div class="fs13" ><span id="char_left">5000</span> Character left</div> 

      </div>
    </div>

    @include('members.layout.form-errors')