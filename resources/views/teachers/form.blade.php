<div class="row mt-4 mb-4">
    <div class="col-md-6 mb-4 m-auto form-group">
        <div style="display: flex;"  class="@error('profile_pic') is-invalid @enderror">
            <div>
                <img class="imgPreview user-profile-image" width="80" src="{{asset($teacher->profile_pic ?? old('profile_pic')) }}" onerror="this.onerror=null;this.src='https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&d=mm&r=g';">
            </div>
            <div style="margin-left: 15px; flex-grow: 1">
                <p>Choose a file</p>
                <input id="photo" type="file">
                <input id="profile_pic" name="profile_pic" type="hidden" value="{{$teacher->profile_pic ?? old('profile_pic')}}">
                <input type="hidden" name="id" value="required|image|mimes:png,jpg,jpeg|max:500" path="teacher">
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
           
        </div>
         @error('profile_pic')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

        

  <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $teacher->name ?? old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $teacher->email ?? old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $teacher->dob ?? old('dob') }}" required autocomplete="dob">

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" value="{{ $teacher->subject ?? old('subject') }}" name="subject" required autocomplete="subject">

                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone No.') }}</label>

                            <div class="col-md-6">
                                <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" value="{{ $teacher->phone_no ?? old('phone_no') }}" name="phone_no" >

                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Qualification') }}</label>

                            <div class="col-md-6">
                                <input id="qualification" type="text" class="form-control @error('qualification') is-invalid @enderror" value="{{ $teacher->qualification ?? old('qualification') }}" name="qualification" >

                                @error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="address" type="text" name="address"  class="form-control @error('address') is-invalid @enderror">{{ $teacher->address ?? old('address') }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>




            
                <script>
                $(document).ready(function(){
                     $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });
            var validation = $('input[name="id"]').val();
            var path = $('input[name="id"]').attr('path');
            $('#photo').change(function () {
                var photo = $(this)[0].files[0];
                var formData = new FormData();
                formData.append('photo', photo);
                formData.append('path', path);
                formData.append('validation', validation);

                $.ajax({
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                
                                $('.progress-bar').css('width', percentComplete + '%');
                                if (percentComplete === 100) {
                                    console.log('completed 100%')                                   
                                    setTimeout(function () {
                                        $('.progress-bar').css('width', '0%');
                                    }, 2000)
                                }
                            }
                        }, false);
                        return xhr;
                    },
                    url: '{{route('file-upload')}}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                       
                        if(!res.success){alert(res.error);return false;}
                        $('input[name="profile_pic"]').val(res.path);
                          var imageUrl = window.URL.createObjectURL(photo)
                                    $('.imgPreview').attr('src', imageUrl);

                        
                    }
                })
            })
                });
     
      
    </script>
