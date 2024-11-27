  @include('members.layout.header')
  @include('members.layout.menu')
  @include('members.layout.sidebar-vda')

  <div class="wrapper">

      @include('members.layout.spotlight-ads')
    <div class="description">
      <h1>Edit Profile</h1>

      <div class="par">
        Listjoe is a social email marketing service, and each member can create their own profile.
        Be sure to add a picture of yourself (not a logo, or pet!);
        this is how you brand yourself and start getting noticed online.
      </div>
    </div>

  @include('members.layout.form-feedback')


    <style>
      .main-profile-titles {
        float: left;
        width: 198px;
      }
      .main-profile-title {
        text-align: right;
        padding: 13px;
        font-weight: bold;
        font-size: 14px;
        position: relative;
      }
      .main-profile-inputs {
        float: left;
        width: 324px;
      }
      .main-profile-input {
        display: block;
        margin: 9px 0 18px 5px;
        width: 100%;
      }
      .main-profile-avatar {
        position: relative;
        margin-left: 5px;
        top: 6px;
      }
      .main-profile-avatar-img {
        width: 135px;
        height: 135px;
        position: relative;
        border: 1px solid #6D6D6D;
      }
      .main-profile-avatar-form {
        position: absolute;
        top: 18px;
        left: 179px;
        width: 176px;
      }
      .main-content-form-or {
        position: relative;
        margin-top: 14px;
        font-size: 13px;
      }
      .main-content-avatar-form-select {
        width: 144px;
        margin: 0;
      }
      .main-content-form-check {
        margin-top: 14px;
        float: left;
      }
      .main-content-form-label {
        font-size: 13px;
        display: inline-block;
        margin-top: 14px;
      }
    </style>

    <div class="main-content-main">

      <div class="main-content-wrapper2">

        
        <form method="post"
        action="/members/editprofile/update"
        enctype="multipart/form-data"
        id="profileForm"
        class="profileForm"
        style="overflow: hidden;" >
        @csrf
        <div class="main-profile-titles">
          <div class="main-profile-title">
            Your Profile Photo
          </div>
          <div class="main-profile-title" style="margin-top: 104px;">
            {{-- Facebook Url<br> --}}
            http://facebook.com/
          </div>
          <div class="main-profile-title">
            {{-- Twitter --}}
            http://twitter.com/

          </div>
          <div class="main-profile-title">
            Skype Username
          </div>
        </div>

        <div class="main-profile-inputs">
          <div class="main-profile-avatar">
            <div class="main-profile-avatar-img">
              <a href='http://listjoe.com/members/profile/u/{{ Auth::user()->username }}'>
                <img src='/storage/profile-photos/{{ Auth::user()->avatar }}' width='135' height='135' class='photo'/>
                 <!-- <img src='http://localhost::8000/avatars/1732677109.jpg' width='135' height='135' class='photo'/> -->
              </a>                    </div>

              <div class="main-profile-avatar-form">
                <div class="blue_button "  id="upload_photo">
                  Select photo
                </div>

                <div class="main-content-form-or">OR</div>


                <input type="checkbox" name="gravatar" class="main-content-form-check" id="gravatar"
                />
                <label for="gravatar" class="main-content-form-label">Click To Use Gravatar</label>
              </div>
            </div>

            <input type="input" class="main-profile-input" name="facebook" value="{{ $socialProfiles['facebook'] ?? ''}}" style="margin-top: 17px;">



            <input type="input" class="main-profile-input" name="twitter" value="{{ $socialProfiles['twitter'] ?? ''}}">


            <input type="input" class="main-profile-input" name="skype" value="{{ $socialProfiles['skype'] ?? ''}} ">
          </div>
          <div style="text-align: center">
            {{-- <div class="blue_button" data-submit="profileForm">Save</div> --}}
            @include('members.layout.form-errors')
            <button class="blue_button">
              Save Social Profiles
            </button>
            <br><br>


          </form>
        </div>
      </div>
    </div>

    <script src="/js/ajaxupload.3.6.js" type="text/javascript"></script>
    <script>
      var btnUpload;
      $(document).ready(function(){
        btnUpload = $('#upload_photo');

        ajaxUpload = new AjaxUpload(btnUpload, {
          action: '/members/uploadavatar',
          method: 'POST',
          name: 'avatar',
          autoSubmit: true,
          data: {"_token": "{{ csrf_token() }}"},
          onChange: function(file) {
            // alert('onchange');
            // alert(file);

          },

          onSubmit: function(file, ext){
            if (! (ext && /^(jpg)$/.test(ext))){
              // alert('false');
              return false;
            }
                  //mask
                },

                onComplete: function(file, response){
                  console.log(response)
                  $('.main-profile-avatar-img img').attr('src', response)
                }
              });
      })
    </script>                </div>

  </div>
  </div>


  @include('members.layout.footer')