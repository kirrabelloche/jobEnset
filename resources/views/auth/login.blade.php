@extends('auth.authlayout')

@section('content')

	<!--begin::Login Sign in form-->

    <div class="login-signin">
        <div class="mb-20">
            <h3 class="opacity-40 font-weight-normal">@lang('Sign In To Admin')</h3>
            <p class="opacity-40">@lang('Enter your details to login to your account:')</p>
        </div>

        <form class="form" method="POST" action="{{ route('login') }}" id="login_form">
            @csrf
            <div class="form-group">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong class="email">{{ $message }}</strong>
                </span>
                @enderror
                <span class="invalid-feedback" role="alert">
                    <strong class="email"></strong>
                </span>
            </div>

            <div class="form-group">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="Password" id="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong class="password">{{ $message }}</strong>
                    </span>
                @enderror
                <span class="invalid-feedback" role="alert">
                        <strong class="password"></strong>
                </span>
            </div>


            <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
                <div class="checkbox-inline">
                    <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                    <input type="checkbox" name="remember" />
                    <span></span>@lang('Remember me')</label>
                </div>

                <a href="javascript:;" class="ml-5 text-white font-weight-bold">@lang('Forgot your password?')</a>
            </div>
            <div class="form-group text-center mt-10">
                <button  class="btn btn-pill btn-primary opacity-90 px-15 py-3" type="submit">@lang('Sign In To Admin')</button>
            </div>
        </form>


        <div class="mt-10">
            <span class="opacity-40 mr-4">@lang("Don't have an account yet?")</span>
            <a href="{{route('register')}}" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">@lang('Sign Up')</a>
        </div>
    </div>
    <!--end::Login Sign in form-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->
    <script type="text/javascript">
        // Interception du Formulaire de connexion

        var form = $('#login_form').get(0)
        $('#login_form').submit(function(e) {
            // Empêcher la soumission de formulaire normale, nous le faisons bien en JS à la place
            e.preventDefault();

            var formData = new FormData();

            formData.append('_token', $('[name=_token]').val());
            formData.append('email', $('[name=email]').val());
            formData.append('password', $('[name=password]').val());

            var method = '{!! route('login') !!}'

            $.ajax({
                url: method,
                type: "post",
                dataType: "json",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                async: false,
                success: function(data) {
                    console.log(data)
                    if(data.success == true)
                    {
                        window.location.replace(data.redirect);
                    }
                    else
                    {
                        $('.email').text('');
                        $('#email').removeClass('is-invalid');
                        $('#email').addClass('is-invalid');
                        $('.email').text(data.message);
                    }
                },
                error: function(data) {

                    console.log(data);

                    $('.email').text('');
                    $('.password').text('');

                    $('#email').removeClass('is-invalid');
                    $('#password').removeClass('is-invalid');

                    var errors = $.parseJSON(data.responseText);
                    console.log(errors.errors);
                    $.each(errors.errors, function(key, value) {
                        $('#' + key).addClass('is-invalid');
                        $('.' + key).text(value);
                    });
                }
            });
        });

    </script>
@endsection
