  @include('members.layout.header')
  @include('members.layout.menu')
  @include('members.layout.sidebar-vda')

  <div class="wrapper">

      @include('members.layout.spotlight-ads')
    <div class="description">
      <h1>Edit Social Profile</h1>

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


        
      <form method="post"
        action="/members/editprofile/update"
        enctype="multipart/form-data"
        id="profileForm"
        class="profileForm"
        style="overflow: hidden;" > 
        @csrf




<div align="center">
<table>
  <tr>
    <td> Facebook</td>
    <td><input type="input" class="main-profile-input" name="facebook" value="{{ $socialProfiles['facebook'] ?? ''}}" style="margin-top: 17px;">
    </td>
  </tr>
  <tr>
    <td>X</td>
    <td><input type="input" class="main-profile-input" name="twitter" value="{{ $socialProfiles['twitter'] ?? ''}}"></td>
  </tr>
  <tr>
    <td>Skype</td>
    <td>          <input type="input" class="main-profile-input" name="skype" value="{{ $socialProfiles['skype'] ?? ''}} "></td>
    </tr>
  </table>
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
</div>
</form>

  @include('members.layout.footer')

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
            alert('onchange');
            alert(file);

          },

          onSubmit: function(file, ext){
            if (! (ext && /^(jpg)$/.test(ext))){
              alert('false');
              return false;
            }
                  //mask
                },

                onComplete: function(file, response){
                  console.log(response)
                  alert(response);
                  $('.main-profile-avatar-img img').attr('src', response)
                }
              });
      })
    </script>               